<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from /buildkit/build/dmaster/sites/default/files/civicrm/ext/mailchimpsync/xml/schema/CRM/Mailchimpsync/MailchimpsyncBatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:9893c78080890fa49f03127e16f25c1f)
 */

/**
 * Database access object for the MailchimpsyncBatch entity.
 */
class CRM_Mailchimpsync_DAO_MailchimpsyncBatch extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailchimpsync_batch';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique MailchimpsyncBatch ID
   *
   * @var int
   */
  public $id;

  /**
   * We batch per list/audience
   *
   * @var string
   */
  public $mailchimp_list_id;

  /**
   * Mailchimp-supplied Batch ID
   *
   * @var string
   */
  public $mailchimp_batch_id;

  /**
   * Mailchimp-supplied status
   *
   * @var string
   */
  public $status;

  /**
   * @var datetime
   */
  public $submitted_at;

  /**
   * Mailchimp-supplied date of completion
   *
   * @var datetime
   */
  public $completed_at;

  /**
   * @var int
   */
  public $finished_operations;

  /**
   * @var int
   */
  public $errored_operations;

  /**
   * @var int
   */
  public $total_operations;

  /**
   * Set to 1 when processing, 2 when processed
   *
   * @var int
   */
  public $response_processed;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailchimpsync_batch';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('Unique MailchimpsyncBatch ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailchimpsync_batch.id',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'mailchimp_list_id' => [
          'name' => 'mailchimp_list_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('We batch per list/audience'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailchimpsync_batch.mailchimp_list_id',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'mailchimp_batch_id' => [
          'name' => 'mailchimp_batch_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('Mailchimp-supplied Batch ID'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailchimpsync_batch.mailchimp_batch_id',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Status'),
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('Mailchimp-supplied status'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_mailchimpsync_batch.status',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'submitted_at' => [
          'name' => 'submitted_at',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Submitted At'),
          'where' => 'civicrm_mailchimpsync_batch.submitted_at',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'completed_at' => [
          'name' => 'completed_at',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Completed At'),
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('Mailchimp-supplied date of completion'),
          'where' => 'civicrm_mailchimpsync_batch.completed_at',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'finished_operations' => [
          'name' => 'finished_operations',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Finished Operations'),
          'where' => 'civicrm_mailchimpsync_batch.finished_operations',
          'default' => '0',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'errored_operations' => [
          'name' => 'errored_operations',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Errored Operations'),
          'where' => 'civicrm_mailchimpsync_batch.errored_operations',
          'default' => '0',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'total_operations' => [
          'name' => 'total_operations',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Total Operations'),
          'where' => 'civicrm_mailchimpsync_batch.total_operations',
          'default' => '0',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
        'response_processed' => [
          'name' => 'response_processed',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Mailchimpsync_ExtensionUtil::ts('Response Processed'),
          'description' => CRM_Mailchimpsync_ExtensionUtil::ts('Set to 1 when processing, 2 when processed'),
          'where' => 'civicrm_mailchimpsync_batch.response_processed',
          'default' => '0',
          'table_name' => 'civicrm_mailchimpsync_batch',
          'entity' => 'MailchimpsyncBatch',
          'bao' => 'CRM_Mailchimpsync_DAO_MailchimpsyncBatch',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailchimpsync_batch', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailchimpsync_batch', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
