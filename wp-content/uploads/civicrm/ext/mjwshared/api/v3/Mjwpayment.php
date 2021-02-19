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
 * @todo mjwpayment.get_contribution is a replacement for Contribution.get
 *   which support querying by contribution/payment trxn_id per https://github.com/civicrm/civicrm-core/pull/14748
 *   - These API functions should be REMOVED once core has the above PR merged and we increment the min version for the extension.
 *   - The change is small, but to re-implement them here we have to copy quite a lot over.
 * @todo mjwpayment.get_payment is a replacement for Payment.get:
 *   https://github.com/civicrm/civicrm-core/pull/16603
 */
/**
 * Adjust Metadata for Get action.
 *
 * The metadata is used for setting defaults, documentation & validation.
 *
 * @param array $params
 *   Array of parameters determined by getfields.
 */
function _civicrm_api3_mjwpayment_get_contribution_spec(&$params) {
  $params = [
    'contribution_test' => [
      'api.default' => 0,
      'type' => CRM_Utils_Type::T_BOOLEAN,
      'title' => 'Get Test Contributions?',
      'api.aliases' => ['is_test'],
    ],
    'trxn_id' => [
      'name' => 'trxn_id',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('Transaction ID'),
      'description' => ts('Transaction id supplied by external processor. This may not be unique.'),
      'maxlength' => 255,
      'size' => 10,
      'where' => 'civicrm_financial_trxn.trxn_id',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
    'order_reference' => [
      'name' => 'order_reference',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => 'Order Reference',
      'description' => 'Payment Processor external order reference',
      'maxlength' => 255,
      'size' => 25,
      'where' => 'civicrm_financial_trxn.order_reference',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
  ];
}

/**
 * Retrieve a set of contributions.
 *
 * @param array $params
 *  Input parameters.
 *
 * @return array
 *   Array of contribution, if error an array with an error id and error message
 */
function civicrm_api3_mjwpayment_get_contribution($params) {
  $payments = civicrm_api3('Mjwpayment', 'get_payment', $params);

  if ($payments['count'] > 0) {
    // We found at least one payment for the params we were given.
    // We may have more than one payment (eg. A payment + a refund payment)
    // Return the contribution of the FIRST payment (all found payments SHOULD reference the same contribution)
    $contributionID = reset($payments['values'])['contribution_id'];
    $contribution = civicrm_api3('Contribution', 'getsingle', [
      'id' => $contributionID,
      'contribution_test' => $params['contribution_test'],
    ]);
    $contribution['payments'] = $payments['values'];
  }
  else {
    $contributionParams = [
      'options' => ['limit' => 1, 'sort' => 'id DESC'],
      'contribution_test' => $params['contribution_test'],
    ];
    if (isset($params['order_reference'])) {
      $contributionParams['trxn_id'][] = $params['order_reference'];
    }
    if (isset($params['trxn_id'])) {
      $contributionParams['trxn_id'][] = $params['trxn_id'];
    }
    if (isset($contributionParams['trxn_id'])) {
      $contributionParams['trxn_id'] = ['IN' => $contributionParams['trxn_id']];
    }
    $contribution = civicrm_api3('Contribution', 'get', $contributionParams)['values'];
    $contribution = reset($contribution);
  }
  $result = [];
  if ($contribution) {
    $result = [$contribution['id'] => $contribution];
  }
  return civicrm_api3_create_success($result, $params, 'Mjwpayment', 'get_contribution');
}

/**
 * Adjust Metadata for Get action.
 *
 * The metadata is used for setting defaults, documentation & validation.
 *
 * @param array $params
 *   Array of parameters determined by getfields.
 */
function _civicrm_api3_mjwpayment_get_payment_spec(&$params) {
  $params = [
    'contribution_id' => [
      'title' => ts('Contribution ID'),
      'type' => CRM_Utils_Type::T_INT,
    ],
    'entity_id' => [
      'title' => ts('Entity ID'),
      'type' => CRM_Utils_Type::T_INT,
      'api.aliases' => ['contribution_id'],
    ],
    'trxn_id' => [
      'title' => ts('Transaction ID'),
      'description' => ts('Transaction id supplied by external processor. This may not be unique.'),
      'type' => CRM_Utils_Type::T_STRING,
    ],
    'order_reference' => [
      'title' => 'Order Reference',
      'description' => 'Payment Processor external order reference',
      'type' => CRM_Utils_Type::T_STRING,
    ],
    'trxn_date' => [
      'title' => ts('Payment Date'),
      'type' => CRM_Utils_Type::T_TIMESTAMP,
    ],
    'financial_trxn_id' => [
      'title' => ts('Payment ID'),
      'description' => ts('The ID of the record in civicrm_financial_trxn'),
      'type' => CRM_Utils_Type::T_INT,
      'api.aliases' => ['payment_id', 'id'],
    ],
  ];
}

/**
 * Retrieve a set of financial transactions which are payments.
 * @todo This matches Payment.Get following https://github.com/civicrm/civicrm-core/pull/17071 which will be in CiviCRM 5.26
 *
 * @param array $params
 *  Input parameters.
 *
 * @return array
 *   Array of financial transactions which are payments, if error an array with an error id and error message
 * @throws \CiviCRM_API3_Exception
 */
function civicrm_api3_mjwpayment_get_payment($params) {
  $params['is_payment'] = TRUE;
  $contributionID = $params['entity_id'] ?? NULL;

  // In order to support contribution id we need to do an extra lookup.
  if ($contributionID) {
    $eftParams = [
      'entity_id' => $contributionID,
      'entity_table' => 'civicrm_contribution',
      'options' => ['limit' => 0],
      'financial_trxn_id.is_payment' => 1,
    ];
    $eft = civicrm_api3('EntityFinancialTrxn', 'get', $eftParams)['values'];
    if (empty($eft)) {
      return civicrm_api3_create_success([], $params, 'Payment', 'get');
    }
    foreach ($eft as $entityFinancialTrxn) {
      $params['financial_trxn_id']['IN'][] = $entityFinancialTrxn['financial_trxn_id'];
    }
  }

  $financialTrxn = civicrm_api3('FinancialTrxn', 'get', array_merge($params, ['sequential' => FALSE]))['values'];
  if ($contributionID) {
    foreach ($financialTrxn as &$values) {
      $values['contribution_id'] = $contributionID;
    }
  }
  elseif (!empty($financialTrxn)) {
    $entityFinancialTrxns = civicrm_api3('EntityFinancialTrxn', 'get', ['financial_trxn_id' => ['IN' => array_keys($financialTrxn)], 'entity_table' => 'civicrm_contribution', 'options' => ['limit' => 0]])['values'];
    foreach ($entityFinancialTrxns as $entityFinancialTrxn) {
      $financialTrxn[$entityFinancialTrxn['financial_trxn_id']]['contribution_id'] = $entityFinancialTrxn['entity_id'];
    }
  }

  return civicrm_api3_create_success($financialTrxn, $params, 'Mjwpayment', 'get_payment');
}

/**
 * Adjust Metadata for Create action.
 * @fixme Spec per Payment.create in CiviCRM 5.27
 *
 * The metadata is used for setting defaults, documentation & validation.
 *
 * @param array $params
 *   Array of parameters.
 */
function _civicrm_api3_mjwpayment_create_payment_spec(&$params) {
  $params = [
    'contribution_id' => [
      'api.required' => 1,
      'title' => ts('Contribution ID'),
      'type' => CRM_Utils_Type::T_INT,
      // We accept order_id as an alias so that we can chain like
      // civicrm_api3('Order', 'create', ['blah' => 'blah', 'contribution_status_id' => 'Pending', 'api.Payment.create => ['total_amount' => 5]]
      'api.aliases' => ['order_id'],
    ],
    'total_amount' => [
      'api.required' => 1,
      'title' => ts('Total Payment Amount'),
      'type' => CRM_Utils_Type::T_FLOAT,
    ],
    'fee_amount' => [
      'title' => ts('Fee Amount'),
      'type' => CRM_Utils_Type::T_FLOAT,
    ],
    'payment_processor_id' => [
      'name' => 'payment_processor_id',
      'type' => CRM_Utils_Type::T_INT,
      'title' => ts('Payment Processor'),
      'description' => ts('Payment Processor for this payment'),
      'where' => 'civicrm_financial_trxn.payment_processor_id',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'FKClassName' => 'CRM_Financial_DAO_PaymentProcessor',
    ],
    'id' => [
      'title' => ts('Payment ID'),
      'type' => CRM_Utils_Type::T_INT,
      'api.aliases' => ['payment_id'],
    ],
    'trxn_date' => [
      'title' => ts('Payment Date'),
      'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
      'api.default' => 'now',
      'api.required' => TRUE,
    ],
    'is_send_contribution_notification' => [
      'title' => ts('Send out notifications based on contribution status change?'),
      'description' => ts('Most commonly this equates to emails relating to the contribution, event, etcwhen a payment completes a contribution'),
      'type' => CRM_Utils_Type::T_BOOLEAN,
      'api.default' => TRUE,
    ],
    'payment_instrument_id' => [
      'name' => 'payment_instrument_id',
      'type' => CRM_Utils_Type::T_INT,
      'title' => ts('Payment Method'),
      'description' => ts('FK to payment_instrument option group values'),
      'where' => 'civicrm_financial_trxn.payment_instrument_id',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Select',
      ],
      'pseudoconstant' => [
        'optionGroupName' => 'payment_instrument',
        'optionEditPath' => 'civicrm/admin/options/payment_instrument',
      ],
    ],
    'card_type_id' => [
      'name' => 'card_type_id',
      'type' => CRM_Utils_Type::T_INT,
      'title' => ts('Card Type ID'),
      'description' => ts('FK to accept_creditcard option group values'),
      'where' => 'civicrm_financial_trxn.card_type_id',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Select',
      ],
      'pseudoconstant' => [
        'optionGroupName' => 'accept_creditcard',
        'optionEditPath' => 'civicrm/admin/options/accept_creditcard',
      ],
    ],
    'trxn_result_code' => [
      'name' => 'trxn_result_code',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('Transaction Result Code'),
      'description' => ts('processor result code'),
      'maxlength' => 255,
      'size' => CRM_Utils_Type::HUGE,
      'where' => 'civicrm_financial_trxn.trxn_result_code',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
    ],
    'trxn_id' => [
      'name' => 'trxn_id',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('Transaction ID'),
      'description' => ts('Transaction id supplied by external processor. This may not be unique.'),
      'maxlength' => 255,
      'size' => 10,
      'where' => 'civicrm_financial_trxn.trxn_id',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
    'order_reference' => [
      'name' => 'order_reference',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => 'Order Reference',
      'description' => 'Payment Processor external order reference',
      'maxlength' => 255,
      'size' => 25,
      'where' => 'civicrm_financial_trxn.order_reference',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
    'check_number' => [
      'name' => 'check_number',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('Check Number'),
      'description' => ts('Check number'),
      'maxlength' => 255,
      'size' => 6,
      'where' => 'civicrm_financial_trxn.check_number',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
    'pan_truncation' => [
      'name' => 'pan_truncation',
      'type' => CRM_Utils_Type::T_STRING,
      'title' => ts('PAN Truncation'),
      'description' => ts('Last 4 digits of credit card'),
      'maxlength' => 4,
      'size' => 4,
      'where' => 'civicrm_financial_trxn.pan_truncation',
      'table_name' => 'civicrm_financial_trxn',
      'entity' => 'FinancialTrxn',
      'bao' => 'CRM_Financial_DAO_FinancialTrxn',
      'localizable' => 0,
      'html' => [
        'type' => 'Text',
      ],
    ],
  ];
}

/**
 * Add a payment for a Contribution.
 * @fixme Payment.create didn't support order_reference param until CiviCRM version 5.27
 *   (https://github.com/civicrm/civicrm-core/pull/17278)
 *   This provides compatibility by copying APIv3 Payment.create + FinancialTrxn.create
 *
 * @param array $params
 *   Input parameters.
 *
 * @return array
 *   Api result array
 *
 * @throws \CRM_Core_Exception
 * @throws \CiviCRM_API3_Exception
 */
function civicrm_api3_mjwpayment_create_payment($params) {
  if (empty($params['skipCleanMoney'])) {
    foreach (['total_amount', 'net_amount', 'fee_amount'] as $field) {
      if (isset($params[$field])) {
        $params[$field] = CRM_Utils_Rule::cleanMoney($params[$field]);
      }
    }
  }
  if (!empty($params['payment_processor'])) {
    // I can't find evidence this is passed in - I was gonna just remove it but decided to deprecate  as I see getToFinancialAccount
    // also anticipates it.
    CRM_Core_Error::deprecatedFunctionWarning('passing payment_processor is deprecated - use payment_processor_id');
    $params['payment_processor_id'] = $params['payment_processor'];
  }
  // Check if it is an update
  if (!empty($params['id'])) {
    $amount = $params['total_amount'];
    civicrm_api3('Payment', 'cancel', $params);
    $params['total_amount'] = $amount;
  }
  // @todo #17777 - we store receive_date so we can fix it later
  if (version_compare(CRM_Utils_System::version(), '5.29', '<')) {
    $contributionReceiveDate = (string) civicrm_api3('Contribution', 'getvalue', [
      'id' => $params['contribution_id'],
      'return' => 'receive_date'
    ]);
  }

  $trxn = CRM_Financial_BAO_Payment::create($params);

  if (version_compare(CRM_Utils_System::version(), '5.27', '<')) {
    // @todo Payment.create didn't support order_reference param until CiviCRM version 5.27 (https://github.com/civicrm/civicrm-core/pull/17278)
    civicrm_api3('FinancialTrxn', 'create', [
      'id' => $trxn->id,
      'order_reference' => $params['order_reference'],
    ]);
  }

  if (version_compare(CRM_Utils_System::version(), '5.29', '<')) {
    // @todo Fix contribution receive date as it should not be updated by Payment.create https://github.com/civicrm/civicrm-core/pull/17777
    $sql = 'UPDATE civicrm_contribution SET receive_date="%2" WHERE id=%1';
    $sqlParams = [
      1 => [$params['contribution_id'], 'Positive'],
      2 => [CRM_Utils_Date::isoToMysql($contributionReceiveDate), 'Date']
    ];
    CRM_Core_DAO::executeQuery($sql, $sqlParams);
  }

  $values = [];
  _civicrm_api3_object_to_array_unique_fields($trxn, $values[$trxn->id]);
  return civicrm_api3_create_success($values, $params, 'Payment', 'create', $trxn);
}
