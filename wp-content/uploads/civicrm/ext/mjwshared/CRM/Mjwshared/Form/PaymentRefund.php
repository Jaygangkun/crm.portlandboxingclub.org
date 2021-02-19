<?php

use CRM_Mjwshared_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Mjwshared_Form_PaymentRefund extends CRM_Core_Form {

  /**
   * @var int $paymentID
   */
  private $paymentID;

  /**
   * @var int $contributionID
   */
  private $contributionID;

  public function buildQuickForm() {
    if (!CRM_Core_Permission::check('edit contributions')) {
      CRM_Core_Error::statusBounce(ts('You do not have permission to access this page.'));
    }

    if ($this->isSubmitted()) {
      return;
    }

    $this->setTitle('Refund payment');

    $this->paymentID = CRM_Utils_Request::retrieveValue('id', 'Positive', NULL, FALSE, 'GET');
    if (!$this->paymentID) {
      CRM_Core_Error::statusBounce('Payment not found!');
    }

    $this->contributionID = CRM_Utils_Request::retrieveValue('contribution_id', 'Positive', NULL, FALSE, 'GET');
    if (!$this->contributionID) {
      CRM_Core_Error::statusBounce('Contribution not found!');
    }

    $this->add('hidden', 'payment_id');

    $lineItems = civicrm_api3('LineItem', 'get', [
      'contribution_id' => $this->contributionID,
    ])['values'];
    foreach ($lineItems as $lineItemID => $lineItemDetails) {
      switch ($lineItemDetails['entity_table']) {
        case 'civicrm_participant':
          $participantIDs[] = $lineItemDetails['entity_id'];
          break;
      }
    }
    if (!empty($participantIDs)) {
      $this->set('participant_ids', $participantIDs);
      $participants = civicrm_api3('Participant', 'get', [
        'id' => ['IN' => $participantIDs],
      ])['values'];
      $this->assign('participants', $participants);
      $this->addYesNo('cancel_participants', E::ts('Cancel Participants'), NULL, TRUE);
    }

    $this->addButtons([
      [
        'type' => 'submit',
        'name' => ts('Refund'),
        'isDefault' => TRUE,
      ],
      [
        'type' => 'cancel',
        'name' => ts('Cancel'),
      ],
    ]);
  }

  public function setDefaultValues() {
    if ($this->paymentID) {
      $this->_defaults['payment_id'] = $this->paymentID;
      $this->set('payment_id', $this->paymentID);
    }
    return $this->_defaults;
  }

  public function postProcess() {
    $formValues = $this->getSubmitValues();
    $paymentID = $this->get('payment_id');
    $participantIDs = $this->get('participant_ids');
    // For some reason cancel_participants is a required field but is not being validated as "required" by the form.
    //   so do a crude validation here.
    if (!empty($participantIDs) && !isset($formValues['cancel_participants'])) {
      CRM_Core_Error::statusBounce('Cancel Participants is a required field');
    }

    try {
      $payment = reset(civicrm_api3('Mjwpayment', 'get_payment', ['id' => $paymentID])['values']);
      $refundParams = [
        'payment_processor_id' => $payment['payment_processor_id'],
        'amount' => $payment['total_amount'],
        'currency' => $payment['currency'],
        'trxn_id' => $payment['trxn_id'],
      ];
      $refund = reset(civicrm_api3('PaymentProcessor', 'Refund', $refundParams)['values']);
      if ($refund['refund_status_name'] === 'Completed') {
        $refundPaymentParams = [
          'contribution_id' => $payment['contribution_id'],
          'trxn_id' => $refund['refund_trxn_id'],
          'order_reference' => $payment['order_reference'],
          'total_amount' => (-$payment['total_amount']),
          'payment_processor_id' => $payment['payment_processor_id'],
        ];
        // Record the refund in CiviCRM
        civicrm_api3('Mjwpayment', 'create_payment', $refundPaymentParams);
        $message = E::ts('Refund was processed successfully.');

        if ($formValues['cancel_participants'] && !empty($participantIDs)) {
          foreach ($participantIDs as $participantID) {
            civicrm_api3('Participant', 'create', [
              'id' => $participantID,
              'status_id' => 'Cancelled',
            ]);
          }
          $message .= ' ' . E::ts('Cancelled %1 participant registration(s).', [1 => count($participantIDs)]);
        }
        CRM_Core_Session::setStatus($message, 'Refund processed', 'success');
      }
      else {
        CRM_Core_Error::statusBounce("Refund status '{$refund['refund_status_name']}'is not supported at this time and was not recorded in CiviCRM.");
      }
    } catch (Exception $e) {
      CRM_Core_Error::statusBounce($e->getMessage(), NULL, 'Refund failed');
    }
  }

}
