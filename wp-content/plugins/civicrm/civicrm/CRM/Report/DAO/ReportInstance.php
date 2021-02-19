<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Report/ReportInstance.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:7c11a51cc566e33761a9f06522c43bbd)
 */

/**
 * Database access object for the ReportInstance entity.
 */
class CRM_Report_DAO_ReportInstance extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '2.2';
  const COMPONENT = 'CiviReport';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_report_instance';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-bar-chart';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Report Instance ID
   *
   * @var int
   */
  public $id;

  /**
   * Which Domain is this instance for
   *
   * @var int
   */
  public $domain_id;

  /**
   * Report Instance Title.
   *
   * @var string
   */
  public $title;

  /**
   * FK to civicrm_option_value for the report template
   *
   * @var string
   */
  public $report_id;

  /**
   * when combined with report_id/template uniquely identifies the instance
   *
   * @var string
   */
  public $name;

  /**
   * arguments that are passed in the url when invoking the instance
   *
   * @var string
   */
  public $args;

  /**
   * Report Instance description.
   *
   * @var string
   */
  public $description;

  /**
   * permission required to be able to run this instance
   *
   * @var string
   */
  public $permission;

  /**
   * role required to be able to run this instance
   *
   * @var string
   */
  public $grouprole;

  /**
   * Submitted form values for this report
   *
   * @var longtext
   */
  public $form_values;

  /**
   * Is this entry active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * FK to contact table.
   *
   * @var int
   */
  public $created_id;

  /**
   * FK to contact table.
   *
   * @var int
   */
  public $owner_id;

  /**
   * Subject of email
   *
   * @var string
   */
  public $email_subject;

  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $email_to;

  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $email_cc;

  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $header;

  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $footer;

  /**
   * FK to navigation ID
   *
   * @var int
   */
  public $navigation_id;

  /**
   * FK to instance ID drilldown to
   *
   * @var int
   */
  public $drilldown_id;

  /**
   * @var bool
   */
  public $is_reserved;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_report_instance';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Reports') : ts('Report');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'owner_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'navigation_id', 'civicrm_navigation', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'drilldown_id', 'civicrm_report_instance', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
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
          'title' => ts('Report Instance ID'),
          'description' => ts('Report Instance ID'),
          'required' => TRUE,
          'where' => 'civicrm_report_instance.id',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Report Instance Domain ID'),
          'description' => ts('Which Domain is this instance for'),
          'required' => TRUE,
          'where' => 'civicrm_report_instance.domain_id',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '3.1',
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Title'),
          'description' => ts('Report Instance Title.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.title',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '2.2',
        ],
        'report_id' => [
          'name' => 'report_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report template ID'),
          'description' => ts('FK to civicrm_option_value for the report template'),
          'required' => TRUE,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.report_id',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'add' => '2.2',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report instance Name'),
          'description' => ts('when combined with report_id/template uniquely identifies the instance'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.name',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '3.2',
        ],
        'args' => [
          'name' => 'args',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Arguments'),
          'description' => ts('arguments that are passed in the url when invoking the instance'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.args',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '3.2',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance description'),
          'description' => ts('Report Instance description.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.description',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '2.2',
        ],
        'permission' => [
          'name' => 'permission',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Permissions'),
          'description' => ts('permission required to be able to run this instance'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.permission',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '2.2',
        ],
        'grouprole' => [
          'name' => 'grouprole',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Assigned to Roles'),
          'description' => ts('role required to be able to run this instance'),
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.grouprole',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '4.1',
        ],
        'form_values' => [
          'name' => 'form_values',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Submitted Form Values'),
          'description' => ts('Submitted form values for this report'),
          'import' => TRUE,
          'where' => 'civicrm_report_instance.form_values',
          'export' => TRUE,
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_PHP,
          'add' => '2.2',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Report Instance is Active'),
          'description' => ts('Is this entry active?'),
          'where' => 'civicrm_report_instance.is_active',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '2.2',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Report Instance Created By'),
          'description' => ts('FK to contact table.'),
          'where' => 'civicrm_report_instance.created_id',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '4.6',
        ],
        'owner_id' => [
          'name' => 'owner_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Report Instance Owned By'),
          'description' => ts('FK to contact table.'),
          'where' => 'civicrm_report_instance.owner_id',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '4.6',
        ],
        'email_subject' => [
          'name' => 'email_subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance email Subject'),
          'description' => ts('Subject of email'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_report_instance.email_subject',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => NULL,
        ],
        'email_to' => [
          'name' => 'email_to',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Email Report Instance To'),
          'description' => ts('comma-separated list of email addresses to send the report to'),
          'where' => 'civicrm_report_instance.email_to',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '2.2',
        ],
        'email_cc' => [
          'name' => 'email_cc',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('cc Email Report Instance To'),
          'description' => ts('comma-separated list of email addresses to send the report to'),
          'where' => 'civicrm_report_instance.email_cc',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '2.2',
        ],
        'header' => [
          'name' => 'header',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Report Instance Header'),
          'description' => ts('comma-separated list of email addresses to send the report to'),
          'rows' => 4,
          'cols' => 60,
          'where' => 'civicrm_report_instance.header',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '2.2',
        ],
        'footer' => [
          'name' => 'footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Report Instance Footer'),
          'description' => ts('comma-separated list of email addresses to send the report to'),
          'rows' => 4,
          'cols' => 60,
          'where' => 'civicrm_report_instance.footer',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '2.2',
        ],
        'navigation_id' => [
          'name' => 'navigation_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Navigation ID'),
          'description' => ts('FK to navigation ID'),
          'import' => TRUE,
          'where' => 'civicrm_report_instance.navigation_id',
          'export' => TRUE,
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Navigation',
          'add' => '3.0',
        ],
        'drilldown_id' => [
          'name' => 'drilldown_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Drilldown Report ID'),
          'description' => ts('FK to instance ID drilldown to'),
          'import' => TRUE,
          'where' => 'civicrm_report_instance.drilldown_id',
          'export' => TRUE,
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'FKClassName' => 'CRM_Report_DAO_ReportInstance',
          'add' => '4.3',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Instance is Reserved'),
          'where' => 'civicrm_report_instance.is_reserved',
          'default' => '0',
          'table_name' => 'civicrm_report_instance',
          'entity' => 'ReportInstance',
          'bao' => 'CRM_Report_BAO_ReportInstance',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '4.2',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'report_instance', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'report_instance', $prefix, []);
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
