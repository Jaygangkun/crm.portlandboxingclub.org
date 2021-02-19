## Information

Releases use the following numbering system:
**{major}.{minor}.{incremental}**

* major: Major refactoring or rewrite - make sure you read and test very carefully!
* minor: Breaking change in some circumstances, or a new feature. Read carefully and make sure you understand the impact of the change.
* incremental: A "safe" change / improvement. Should *always* be safe to upgrade.

* **[BC]**: Items marked with [BC] indicate a breaking change that will require updates to your code if you are using that code in your extension.

## Release 0.9.11

* Add `supportsRecur()` function to CRM.payment.
* Add `getPaymentProcessorSelectorValue()` function to CRM.payment.
* Fix [!15](https://lab.civicrm.org/extensions/mjwshared/-/merge_requests/15) Stripe loading on drupal 8 webforms.

## Release 0.9.10

* Add `getBillingEmail()` and `getBillingName()` functions to CRM.payment library.

## Release 0.9.9

* Trap and log exceptions triggered when calling repeatcontribution.
* Fix [Stripe!121](https://lab.civicrm.org/extensions/stripe/-/merge_requests/121) Drupal Webform: Recognize 0 installments as recurring.
* Add function processZeroAmountPayment to check/handle a zero amount payment.

## Release 0.9.8

**This affects new installs only. It should be completely safe to upgrade existing sites from 0.9.7 to 0.9.8**

* Fix [#6](https://lab.civicrm.org/extensions/mjwshared/-/issues/6) Install error on 0.9.7.
    - This was because the new settings file referenced a class from the Stripe extension.

## Release 0.9.7

* Add support for issuing refunds via the payment UI for payment processors that support refunds (eg. Stripe).
* Fix [Stripe#260](https://lab.civicrm.org/extensions/stripe/-/issues/260) Refund not communicated back to CiviCRM properly (CiviCRM < 5.32).

## Release 0.9.6

* Fix [Stripe#271](https://lab.civicrm.org/extensions/stripe/-/issues/271) Can't submit credit card memberships: Uncaught (in promise) TypeError: this.form is null

## Release 0.9.5

* Fix [#4](https://lab.civicrm.org/extensions/mjwshared/-/issues/4) Fatal error when is_email_receipt = null.

## Release 0.9.4

* Fix [#2](https://lab.civicrm.org/extensions/mjwshared/-/issues/2) Don't update receive_date when marking a contribution as failed.

## Release 0.9.3

* Add `getBillingSubmit()` to CRM.payment.

## Release 0.9.2

* Load CRM.payment library via coreResourceList so it is added everywhere CiviCRM is loaded (eg. drupal_webform etc)
* Fix stripe#238 two receipts sent for subscriptions
* Fix params for updateContributionFailed (id => contribution_id)
* Fix Mjwpayment.get_contribution
* Add getCurrency() function to CRM.payment
* Add 'Install now' to minifier/contributiontransactlegacy extensions now they are available for automated distribution

## Release 0.9.1

* Add workaround for [#17777](https://github.com/civicrm/civicrm-core/pull/17777) so receive_date is not updated on contribution (<5.29). Wrap workaround for order_reference in (<5.27) block
* Fix Failed->Completed for `updateContributionCompleted()` (you now need to pass in `contribution_status_id` as a parameter).
* Fix issues with params for Contribution.repeattransaction and IPNs (wrong params were being passed causing issues with completing contributions and duplicate payments).
* Check if we've already loaded CRM.payment library and don't reload if we have.
* Log errors if payment processor cannot be found for IPN.

## Release 0.9

**We are renaming this library to "Payment Shared". In some places you will see "Mjwshared" and in others "Payment Shared". They are the same thing!**

* Allow completing a contribution that has Failed status via `updateContributionCompleted()`.
* Add basic function for updating a contribution (eg. the `trxn_id`) without touching other things.
* Don't trigger exception if payment processor ID not found for IPN, use debug function because we don't have access to getPaymentProcessorLabel() function.

#### API (v3)

* Update `Mjwpayment.get_payment` spec.
* Refactor `Mjwpayment.get_contribution` so it accepts `order_reference` and `trxn_id` params and returns a single contribution with matching payments.
* Use `Mjwpayment.create_payment` instead of `Payment.create` API in `updateContributionRefund()` for compatibility with multiple versions of CiviCRM.
* Add `Mjwpayment.notificationretry` that allows retrying IPN notifications stored in the `civicrm_system_log` table.

#### CRM.payment library

* Load crm.payment.js before any payment processor scripts. Loaded in `page-header` unless client is webform-civicrm when we load in `billing-block`.
* Add getIsRecur() function.
* Allow the client to override/define their own CRM.payment.getTotalAmount() function (currently used by webform_civicrm - see https://github.com/colemanw/webform_civicrm/pull/331).

#### Shared PHP libraries (MjwTrait and MjwIPNTrait)

* **[BC]** Convert beginDoPayment and getRecurringContributionId now require a `\Civi\Payment\PropertyBag` object instead of an array as parameter.


## Release 0.8.1

* Fixes and improvements to system checks.
* Enhance getErrorUrl function and fixes for CiviCRM 5.27+

## Release 0.8
**This release contains breaking changes**

* Update `updateContributionCompleted`, `updateContributionFailed`, `updateContributionRefunded`, `repeatContribution` IPN functions so they now take `order_reference` and `trxn_id` parameters.

  *You need to update `contribution_trxn_id` -> `order_reference` and `payment_trxn_id` to `trxn_id`.*

* Switch to contribution.repeattransaction and payment.create API functions.
* Initial support for \Civi\Payment\PropertyBag. Add new CRM.payment library. Add WebhookTrait

## Release 0.7

* Implement buildAsset hook so that assets can be loaded via AssetBuilder without the [minifier](https://lab.civicrm.org/extensions/minifier) extension being available.
* Recommend minifier extension (and implement a dummy buildAsset hook so extensions using buildAsset for the minifier will still work without it).
* Recommend contributiontransactlegacy extension if drupal webform_civicrm is enabled.
* Implements setExceptionMode to allow skipping the exit on exception policy [!5](https://lab.civicrm.org/extensions/mjwshared/-/merge_requests/5).
* Add compat functions to work around issues with `\Civi::resources()->addVars()` - This improves compatibility for forms with multiple payment processors.
* Update Mjwpayment.get_payment API to support multiple parameters and options per https://github.com/civicrm/civicrm-core/pull/17071 (CiviCRM 5.26).

## Release 0.6

* Improve updateContributionRefund() function to handle new `order_reference` field and use `Payment.create` API.
* Simply calls in Contribution.getbalance to improve performance.
* Add check to warn if nfp worldpay extension is installed as it breaks things!
* Add currency symbol to Contribution.getbalance

## Release 0.5.1

* Fix getBillingEmail() to work in more circumstances and add tests

## Release 0.5

* Add Contribution.GetBalance API

## Release 0.4.6

* Fix missing return array on getTokenParameter.

## Release 0.4.5

* Remove setTokenParameter, modify getTokenParameter as we're now using pre_approval_parameters in Stripe 6.2

## Release 0.4.4

* Record a full refund correctly

## Release 0.4.3

* Improvements to get/setTokenParameter.
* Add js validation to event registration form.

## Release 0.4.2

* Fix params passed to repeatTransaction - this was causing some repeating contributions to fail.

## Release 0.4.1

* Fix 'is not boolean' error on IPNs. `getIsTestMode()` was returning TRUE/FALSE but the API requires 1/0.

## Release 0.4

* Fix issue with non-default currency on form when you can choose from more than one payment processor on the form.
* Add `getTokenParameter()`/`setTokenParameter()` functions to MJWTrait which should be used when setting parameters
via javascript (eg. Stripe `paymentIntentID`) which are required when the payment is actually processed (via `doPayment()`).

## Release 0.3

* Major refactor of MJWIPNTrait.
* Add function to update the transaction ID for a payment related to a contribution.

## Release 0.2

* Add function to get configured currency for contributionpage/event registration page.

## Release 0.1

* Initial release
