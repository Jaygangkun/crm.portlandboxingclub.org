(function($) {

  var payment = {
    form: null,
    scriptName: 'CRM.payment',

    /**
     * Get the total amount on the form
     * @returns {number}
     */
    getTotalAmount: function() {
      var totalAmount = 0.0;
      if (CRM.payment.isEventAdditionalParticipants()) {
        totalAmount = null;
      }
      else if (document.getElementById('totalTaxAmount') !== null) {
        totalAmount = parseFloat(this.calculateTaxAmount());
        this.debugging(this.scriptName, 'Calculated amount using internal calculateTaxAmount()');
      }
      else if (typeof calculateTotalFee == 'function') {
          // This is ONLY triggered in the following circumstances on a CiviCRM contribution page:
          // - With a priceset that allows a 0 amount to be selected.
          // - When Stripe is the ONLY payment processor configured on the page.
          totalAmount = parseFloat(calculateTotalFee());
        }
        else if (this.getIsDrupalWebform()) {
            // This is how webform civicrm calculates the amount in webform_civicrm_payment.js
            $('.line-item:visible', '#wf-crm-billing-items').each(function() {
              totalAmount += parseFloat($(this).data('amount'));
            });
          }
          else if (document.getElementById('total_amount')) {
              // The input#total_amount field exists on backend contribution forms
              totalAmount = parseFloat(document.getElementById('total_amount').value);
            }
      this.debugging(this.scriptName, 'getTotalAmount: ' + totalAmount);
      return totalAmount;
    },

    /**
     * This is calculated in CRM/Contribute/Form/Contribution.tpl and is used to calculate the total
     *   amount with tax on backend submit contribution forms.
     *   The only way we can get the amount is by parsing the text field and extracting the final bit after the space.
     *   eg. "Amount including Tax: $ 4.50" gives us 4.50.
     *   The PHP side is responsible for converting money formats (we just parse to cents and remove any ,. chars).
     *
     * @returns {string|prototype.value|number}
     */
    calculateTaxAmount: function() {
      var totalTaxAmount = 0;
      if (document.getElementById('totalTaxAmount') === null) {
        return totalTaxAmount;
      }

      // If tax and invoicing is disabled totalTaxAmount div exists but is empty
      if (document.getElementById('totalTaxAmount').textContent.length === 0) {
        totalTaxAmount = document.getElementById('total_amount').value;
      }
      else {
        // Otherwise totalTaxAmount div contains a textual amount including currency symbol
        totalTaxAmount = document.getElementById('totalTaxAmount').textContent.split(' ').pop();
      }
      return totalTaxAmount;
    },

    /**
     * Get currency on the form
     * @param defaultCurrency
     * @returns {string}
     */
    getCurrency: function(defaultCurrency) {
      var currency = defaultCurrency;
      if (this.form.querySelector('#currency')) {
        currency = this.form.querySelector('#currency').value;
      }
      this.debugging(this.scriptName, 'Currency is: ' + currency);
      return currency;
    },

    /**
     * @returns {boolean}
     */
    isEventAdditionalParticipants: function() {
      if ((document.getElementById('additional_participants') !== null) &&
        (document.getElementById('additional_participants').value.length !== 0)) {
        this.debugging(this.scriptName, 'We don\'t know the final price - registering additional participants');
        return true;
      }
      return false;
    },

    getIsDrupalWebform: function() {
      // form class for drupal webform: webform-client-form (drupal 7); webform-submission-form (drupal 8)
      if (this.form !== null) {
        return this.form.classList.contains('webform-client-form') || this.form.classList.contains('webform-submission-form');
      }
      return false;
    },

    getBillingForm: function() {
      // If we have a stripe billing form on the page
      var billingFormID = $('div#card-element').closest('form').prop('id');
      if ((typeof billingFormID === 'undefined') || (!billingFormID.length)) {
        // If we have multiple payment processors to select and stripe is not currently loaded
        billingFormID = $('input[name=hidden_processor]').closest('form').prop('id');
      }
      // We have to use document.getElementById here so we have the right elementtype for appendChild()
      return document.getElementById(billingFormID);
    },

    getBillingSubmit: function() {
      var submit = null;
      if (CRM.payment.getIsDrupalWebform()) {
        submit = this.form.querySelectorAll('[type="submit"].webform-submit');
        if (submit.length === 0) {
          // drupal 8 webform
          submit = this.form.querySelectorAll('[type="submit"].webform-button--submit');
        }
      }
      else {
        submit = this.form.querySelectorAll('[type="submit"].validate');
      }
      if (submit.length === 0) {
        this.debugging(this.scriptName, 'No submit button found!');
      }
      return submit;
    },

    /**
     * Are we creating a recurring contribution?
     * @returns {boolean}
     */
    getIsRecur: function() {
      var isRecur = false;
      // Auto-renew contributions for CiviCRM Webforms.
      if (this.getIsDrupalWebform()) {
        if (($('input[data-civicrm-field-key$="contribution_installments"]').length !== 0 && $('input[data-civicrm-field-key$="contribution_installments"]').val() != 1) ||
          ($('input[data-civicrm-field-key$="contribution_frequency_interval"]').length !== 0 && $('input[data-civicrm-field-key$="contribution_frequency_interval"]').val() > 0)
        ) {
          isRecur = true;
        }
      }
      // Auto-renew contributions
      if (document.getElementById('is_recur') !== null) {
        if (document.getElementById('is_recur').type == 'hidden') {
          isRecur = (document.getElementById('is_recur').value == 1);
        }
        else {
          isRecur = Boolean(document.getElementById('is_recur').checked);
        }
      }
      // Auto-renew memberships
      // This gets messy quickly!
      // input[name="auto_renew"] : set to 1 when there is a force-renew membership with no priceset.
      else if ($('input[name="auto_renew"]').length !== 0) {
        if ($('input[name="auto_renew"]').prop('checked')) {
          isRecur = true;
        }
        else if ($('input[name="auto_renew"]').attr('type') == 'hidden') {
          // If the auto_renew field exists as a hidden field, then we force a
          // recurring contribution (the value isn't useful since it depends on
          // the locale - e.g.  "Please renew my membership")
          isRecur = true;
        }
        else {
          isRecur = Boolean($('input[name="auto_renew"]').checked);
        }
      }
      this.debugging(this.scriptName, 'isRecur is ' + isRecur);
      return isRecur;
    },

    /**
     * Does the form support recurring contributions?
     * @returns {boolean}
     */
    supportsRecur: function() {
      var supportsRecur = false;
      // Auto-renew contributions for CiviCRM Webforms.
      if (this.getIsDrupalWebform()) {
        if (($('input[data-civicrm-field-key$="contribution_installments"]').length !== 0) ||
          ($('input[data-civicrm-field-key$="contribution_frequency_interval"]').length !== 0)
        ) {
          supportsRecur = true;
        }
      }
      // Auto-renew contributions
      if (document.getElementById('is_recur') !== null) {
        supportsRecur = true;
      }
      // Auto-renew memberships
      // input[name="auto_renew"] : set to 1 when there is a force-renew membership with no priceset.
      else if ($('input[name="auto_renew"]').length !== 0) {
        supportsRecur = true;
      }
      this.debugging(this.scriptName, 'supportsRecur is ' + supportsRecur);
      return supportsRecur;
    },

    /**
     * Try and get the billing email(s) from the form
     * @returns {string} separated by ;
     */
    getBillingEmail: function() {
      var billingEmail = '';
      $(this.form).find('input.email').each(function() { billingEmail += $(this).val() + ';'; });
      return billingEmail;
    },

    /**
     * Try and get the billing contact name from the form
     * @returns {string} separated by ;
     */
    getBillingName: function() {
      var billingName = '';
      $(this.form).find('input#first_name,input#last_name').each(function() { billingName += $(this).val() + ';'; });
      return billingName;
    },

    /**
     * Get the selected payment processor on the form
     * @returns {null|number}
     */
    getPaymentProcessorSelectorValue: function() {
      // Frontend radio selector
      var paymentProcessorSelected = this.form.querySelector('input[name="payment_processor_id"]:checked');
      if (paymentProcessorSelected !== null) {
        return parseInt(paymentProcessorSelected.value);
      }
      else {
        // Backend select dropdown
        paymentProcessorSelected = this.form.querySelector('select[name="payment_processor_id"]');
        if (paymentProcessorSelected !== null) {
          return parseInt(paymentProcessorSelected.value);
        }
      }
      return null;
    },

    /**
     * Is the AJAX request a payment form?
     * @param {string} url
     * @returns {bool}
     */
    isAJAXPaymentForm: function(url) {
      return (url.match("civicrm(\/|%2F)payment(\/|%2F)form") !== null) ||
        (url.match("civicrm(\/|\%2F)contact(\/|\%2F)view(\/|\%2F)participant") !== null) ||
        (url.match("civicrm(\/|\%2F)contact(\/|\%2F)view(\/|\%2F)membership") !== null) ||
        (url.match("civicrm(\/|\%2F)contact(\/|\%2F)view(\/|\%2F)contribution") !== null);
    },

    /**
     * Output debug information
     * @param {string} scriptName
     * @param {string} errorCode
     */
    debugging: function(scriptName, errorCode) {
      // Uncomment the following to debug unexpected returns.
      if ((typeof(CRM.vars.stripe) === 'undefined') || (Boolean(CRM.vars.stripe.jsDebug) === true)) {
        console.log(new Date().toISOString() + ' ' + scriptName + ': ' + errorCode);
      }
    }

  };

  if (typeof CRM.payment === 'undefined') {
    CRM.payment = payment;
  }
  else {
    if (CRM.payment.hasOwnProperty('scriptName') && (CRM.payment.scriptName === 'CRM.payment')) {
      return;
    }
    if (CRM.payment.hasOwnProperty('getTotalAmount')) {
      delete(payment.getTotalAmount);
      payment.debugging(payment.scriptName, 'Deferring to client getTotalAmount function');
    }
    $.extend(CRM.payment, payment);
  }

  document.addEventListener('DOMContentLoaded', function() {
    CRM.payment.debugging(CRM.payment.scriptName, 'loaded via DOMContentLoaded');
    CRM.payment.form = CRM.payment.getBillingForm();
  });

  // Re-prep form when we've loaded a new payproc via ajax or via webform
  $(document).ajaxComplete(function(event, xhr, settings) {
    // /civicrm/payment/form? occurs when a payproc is selected on page
    // /civicrm/contact/view/participant occurs when payproc is first loaded on event credit card payment
    // On wordpress these are urlencoded
    if (CRM.payment.isAJAXPaymentForm(settings.url)) {
      CRM.payment.debugging(CRM.payment.scriptName, 'triggered via ajax');
      CRM.payment.form = CRM.payment.getBillingForm();
    }
  });

}(CRM.$));
