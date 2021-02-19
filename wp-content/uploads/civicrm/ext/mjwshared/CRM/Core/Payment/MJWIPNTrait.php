<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 * Shared payment IPN functions that should one day be migrated to CiviCRM core
 *
 * Trait CRM_Core_Payment_MJWIPNTrait
 */
trait CRM_Core_Payment_MJWIPNTrait {

  /**
   * @var \CRM_Core_Payment Payment processor
   */
  protected $_paymentProcessor;

  /**
   * Do we send an email receipt for each contribution?
   *
   * @var int
   */
  protected $is_email_receipt = NULL;

  /**
   * The recurring contribution ID associated with the transaction
   * @var int
   */
  protected $contribution_recur_id = NULL;

  /**
   *  The IPN event type
   * @var string
   */
  protected $eventType = NULL;

  /**
   * Exit on exceptions (TRUE), or just throw them (FALSE).
   */
  protected $exitOnException = TRUE;

  /**
   * Set the value of is_email_receipt to use when a new contribution is received for a recurring contribution
   * If not set, we respect the value set on the ContributionRecur entity.
   *
   * @param int $sendReceipt The value of is_email_receipt
   */
  public function setSendEmailReceipt($sendReceipt) {
    switch ($sendReceipt) {
      case 0:
        $this->is_email_receipt = 0;
        break;

      case 1:
        $this->is_email_receipt = 1;
        break;

      default:
        $this->is_email_receipt = 0;
    }
  }

  /**
   * Get the value of is_email_receipt to use when a new contribution is received for a recurring contribution
   * If not set, we respect the value set on the ContributionRecur entity.
   *
   * @return int
   * @throws \CiviCRM_API3_Exception
   */
  public function getSendEmailReceipt() {
    if (isset($this->is_email_receipt)) {
      return (int) $this->is_email_receipt;
    }
    if (!empty($this->contribution_recur_id)) {
      try {
        $this->is_email_receipt = civicrm_api3('ContributionRecur', 'getvalue', [
          'return' => "is_email_receipt",
          'id' => $this->contribution_recur_id,
        ]);
      }
      catch (Exception $e) {
        $this->is_email_receipt = 0;
      }
    }
    return (int) $this->is_email_receipt;
  }

  /**
   * Get the payment processor
   *   The $_GET['processor_id'] value is set by CRM_Core_Payment::handlePaymentMethod.
   *
   * @throws \CRM_Core_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  protected function getPaymentProcessor() {
   $paymentProcessorID = CRM_Utils_Request::retrieveValue('processor_id', 'Positive', NULL, FALSE, 'GET');
   if (!$paymentProcessorID) {
     $this->exception('Failed to get payment processor ID');
   }
    try {
      $this->_paymentProcessor = \Civi\Payment\System::singleton()->getById($paymentProcessorID);
    }
    catch(Exception $e) {
      $this->exception('Failed to get payment processor');
    }
  }

  /**
   * Check that required params are present
   *
   * @param string $description
   *   For error logs
   * @param array $requiredParams
   *   Array of params that are required
   * @param array $params
   *   Array of params to check
   *
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  protected function checkRequiredParams($description, $requiredParams, $params) {
    foreach ($requiredParams as $required) {
      if (!isset($params[$required])) {
        $this->exception("{$description}: Missing mandatory parameter: {$required}");
      }
    }
  }

  /**
   * Cancel a subscription (recurring contribution)
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  protected function updateRecurCancelled($params) {
    $this->checkRequiredParams('updateRecurCancelled', ['id'], $params);
    civicrm_api3('ContributionRecur', 'cancel', $params);
  }

  /**
   * Update the subscription (recurring contribution) to a successful status
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateRecurSuccess($params) {
    $this->checkRequiredParams('updateRecurSuccess', ['id'], $params);
    $params['failure_count'] = 0;
    $params['contribution_status_id'] = 'In Progress';

    // Successful charge & more to come.
    civicrm_api3('ContributionRecur', 'create', $params);
  }

  /**
   * Update the subscription (recurring contribution) to a completed status
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateRecurCompleted($params) {
    $this->checkRequiredParams('updateRecurCompleted', ['id'], $params);
    $params['contribution_status_id'] = 'Completed';

    civicrm_api3('ContributionRecur', 'create', $params);
  }

  /**
   * Update the subscription (recurring contribution) to a failing status
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateRecurFailed($params) {
    $this->checkRequiredParams('updateRecurFailed', ['id'], $params);

    $failureCount = civicrm_api3('ContributionRecur', 'getvalue', [
      'id' => $params['id'],
      'return' => 'failure_count',
    ]);
    $failureCount++;

    $params['failure_count'] = $failureCount;
    $params['contribution_status_id'] = 'Failed';

    // Change the status of the Recurring and update failed attempts.
    civicrm_api3('ContributionRecur', 'create', $params);
  }

  /**
   * Repeat a contribution (call the Contribution.repeattransaction API)
   *
   * @param array $params
   *
   * @return bool
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function repeatContribution($params) {
    $this->checkRequiredParams(
      'repeatContribution',
      [
        'contribution_status_id',
        'contribution_recur_id',
        // Optional: 'original_contribution_id',
        'receive_date',
        'order_reference',
        'trxn_id',
        'total_amount',
      ],
      $params
    );
    // Optional Params: fee_amount

    // Creat contributionParams for Contribution.repeattransaction and set some values
    $contributionParams = $params;
    // Status should be pending if we have a successful payment
    switch ($params['contribution_status_id']) {
      case CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Completed'):
        // Create a contribution in Pending state using Contribution.repeattransaction and then complete using Payment.create
        $contributionParams['contribution_status_id'] = 'Pending';
        $createPayment = TRUE;
        break;

      default:
        // Failed etc.
        // For any other status create it directly using Contribution.repeattransaction and don't create a payment
        $contributionParams['contribution_status_id'] = $params['contribution_status_id'];
        $createPayment = FALSE;
    }

    // Create the new contribution
    $contributionParams['trxn_id'] = $params['order_reference'];
    // We send a receipt when adding a payment, not now
    $contributionParams['is_email_receipt'] = FALSE;
    try {
      $contribution = civicrm_api3('Contribution', 'repeattransaction', $contributionParams);
    }
    catch (Exception $e) {
      \Civi::log()->error('MJWIPNTrait call to repeattransaction failed: ' . $e->getMessage() . '; params: ' . print_r($contributionParams, TRUE));
      return FALSE;
    }

    if ($createPayment) {
      $paymentParamsKeys = [
        'receive_date' => 'trxn_date',
        'order_reference' => 'order_reference',
        'trxn_id' => 'trxn_id',
        'total_amount' => 'total_amount',
        'fee_amount' => 'fee_amount',
      ];
      foreach ($paymentParamsKeys as $contributionKey => $paymentKey) {
        if (isset($params[$contributionKey])) {
          $paymentParams[$paymentKey] = $params[$contributionKey];
        }
      }
      $paymentParams['contribution_id'] = $contribution['id'];
      $paymentParams['is_send_contribution_notification'] = $this->getSendEmailReceipt();
      $paymentParams['skipCleanMoney'] = TRUE;
      civicrm_api3('Mjwpayment', 'create_payment', $paymentParams);
    }
    return TRUE;
  }

  /**
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateContribution($params) {
    $this->checkRequiredParams('updateContribution', ['contribution_id'], $params);
    $params['id'] = $params['contribution_id'];
    unset($params['contribution_id']);
    $params['skipCleanMoney'] = TRUE;
    $params['skipRecentView'] = TRUE;
    $params['skipLineItem'] = TRUE;
    $params['is_post_payment_create'] = TRUE;
    civicrm_api3('Contribution', 'create', $params);
  }

  /**
   * Complete a pending contribution and update associated entities (recur/membership)
   *
   * @param array $params
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateContributionCompleted($params) {
    $this->checkRequiredParams('updateContributionCompleted', ['contribution_id', 'trxn_date', 'order_reference', 'trxn_id'], $params);

    $paymentParamsKeys = [
      'contribution_id' => 'contribution_id',
      'trxn_date' => 'trxn_date',
      'order_reference' => 'order_reference',
      'trxn_id' => 'trxn_id',
      'total_amount' => 'total_amount',
      'fee_amount' => 'fee_amount',
    ];
    foreach ($paymentParamsKeys as $contributionKey => $paymentKey) {
      if (isset($params[$contributionKey])) {
        $paymentParams[$paymentKey] = $params[$contributionKey];
      }
    }

    // CiviCRM does not (currently) allow changing contribution_status=Failed to anything else.
    // But we need to go from Failed to Completed if payment succeeds following a failure.
    // So we check for Failed status and update to Pending so it will transition to Completed.
    // Fixed in 5.29 with https://github.com/civicrm/civicrm-core/pull/17943
    $failedContributionStatus = (int) CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Failed');
    if (isset($params['contribution_status_id']) && ((int) $params['contribution_status_id'] === $failedContributionStatus)) {
      $sql = "UPDATE civicrm_contribution SET contribution_status_id=%1 WHERE id=%2";
      $queryParams = [
        1 => [CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Pending'), 'Positive'],
        2 => [$params['contribution_id'], 'Positive'],
      ];
      CRM_Core_DAO::executeQuery($sql, $queryParams);
    }
    $paymentParams['is_send_contribution_notification'] = $this->getSendEmailReceipt();
    $paymentParams['skipCleanMoney'] = TRUE;
    $paymentParams['payment_processor_id'] = $this->_paymentProcessor->getID();
    civicrm_api3('Mjwpayment', 'create_payment', $paymentParams);
  }

  /**
   * Update a contribution to failed
   *
   * @param array $params ['contribution_id', 'order_reference'{, cancel_date, cancel_reason}]
   *
   * @throws \CiviCRM_API3_Exception
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  private function updateContributionFailed($params) {
    $this->checkRequiredParams('updateContributionFailed', ['contribution_id', 'order_reference'], $params);
    civicrm_api3('Contribution', 'create', [
      'contribution_status_id' => 'Failed',
      'id' => $params['contribution_id'],
      'trxn_id' => $params['order_reference'],
      'cancel_date' => $params['cancel_date'] ?? NULL,
      'cancel_reason' => $params['cancel_reason'] ?? NULL,
    ]);
    // No financial_trxn is created so we don't need to update that.
  }

  /**
   * Record a refund on a contribution
   * This wraps around the payment.create API to support earlier releases than features were available
   *
   * Examples:
   * $result = civicrm_api3('Payment', 'create', [
   *   'contribution_id' => 590,
   *   'total_amount' => -3,
   *   'trxn_date' => 20191105200300,
   *   'trxn_result_code' => "Test a refund with fees",
   *   'fee_amount' => -0.25,
   *   'trxn_id' => "abctx123",
   *   'order_reference' => "abcor123",
   * ]);
   *
   *  Returns:
   * "is_error": 0,
   * "version": 3,
   * "count": 1,
   * "id": 465,
   * "values": {
   *   "465": {
   *     "id": "465",
   *     "from_financial_account_id": "7",
   *     "to_financial_account_id": "6",
   *     "trxn_date": "20191105200300",
   *     "total_amount": "-3",
   *     "fee_amount": "-0.25",
   *     "net_amount": "",
   *     "currency": "USD",
   *     "is_payment": "1",
   *     "trxn_id": "abctx123",
   *     "trxn_result_code": "Test a refund with fees",
   *     "status_id": "7",
   *     "payment_processor_id": ""
   *   }
   * }
   *
   * @param array $params
   *
   * @throws \CRM_Core_Exception
   * @throws \CiviCRM_API3_Exception
   */
  protected function updateContributionRefund($params) {
    $this->checkRequiredParams('updateContributionRefund', ['contribution_id', 'total_amount'], $params);
    $params['payment_processor_id'] = $this->_paymentProcessor->getID();
    civicrm_api3('Mjwpayment', 'create_payment', $params);

    // https://github.com/civicrm/civicrm-core/pull/18930
    // Set contribution status to refunded even if cancelled_payment_id is set
    if (version_compare(CRM_Utils_System::version(), '5.32', '<')) {
      if ($params['total_amount'] < 0 && !empty($params['cancelled_payment_id'])) {
        $contribution = civicrm_api3('Contribution', 'getsingle', ['id' => $params['contribution_id']]);
        $contributionStatus = CRM_Core_PseudoConstant::getName('CRM_Contribute_BAO_Contribution', 'contribution_status_id', $contribution['contribution_status_id']);

        if ($contributionStatus === 'Completed' && ((float) CRM_Core_BAO_FinancialTrxn::getTotalPayments($params['contribution_id'], TRUE) === 0.0)) {
          // If the contribution has previously been completed (fully paid) and now has total payments adding up to 0
          //  change status to refunded.
          $this->updateContribution([
            'contribution_id' => $params['contribution_id'],
            'contribution_status_id' => 'Refunded',
          ]);
        }
      }
    }
  }

  /**
   * Switch between "exit on exception" mode and "regular exception handling".
   *
   * @param bool $exitOnException Switch between:
   * - TRUE (default): Exit with HTTP response code 400 when an exception occurs
   * - FALSE: Just throw the exception regularly
   */
  public function setExceptionMode($exitOnException) {
    $this->exitOnException = $exitOnException;
  }

  /**
   * Log and throw an IPN exception
   *
   * @param string $message
   *
   * @throws \Civi\Payment\Exception\PaymentProcessorException
   */
  protected function exception($message) {
    $label = method_exists($this->_paymentProcessor, 'getPaymentProcessorLabel') ? $this->_paymentProcessor->getPaymentProcessorLabel() : __CLASS__;
    $errorMessage = $label . ' Exception: Event: ' . $this->eventType . ' Error: ' . $message;
    Civi::log()->error($errorMessage);
    if ($this->exitOnException) {
      http_response_code(400);
      exit(1);
    } else {
      Throw new \Civi\Payment\Exception\PaymentProcessorException($message);
    }
  }

}
