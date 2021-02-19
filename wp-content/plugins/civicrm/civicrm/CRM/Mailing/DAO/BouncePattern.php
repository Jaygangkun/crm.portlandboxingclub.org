<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Mailing/BouncePattern.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b6a045ddc0126618d3ee8c08a1c495b0)
 */

/**
 * Database access object for the BouncePattern entity.
 */
class CRM_Mailing_DAO_BouncePattern extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '';
  const COMPONENT = 'CiviMail';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mailing_bounce_pattern';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int
   */
  public $id;

  /**
   * Type of bounce
   *
   * @var int
   */
  public $bounce_type_id;

  /**
   * A regexp to match a message to a bounce type
   *
   * @var string
   */
  public $pattern;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_bounce_pattern';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Bounce Patterns') : ts('Bounce Pattern');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'bounce_type_id', 'civicrm_mailing_bounce_type', 'id');
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
          'title' => ts('Bounce Pattern ID'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_bounce_pattern.id',
          'table_name' => 'civicrm_mailing_bounce_pattern',
          'entity' => 'BouncePattern',
          'bao' => 'CRM_Mailing_BAO_BouncePattern',
          'localizable' => 0,
          'add' => NULL,
        ],
        'bounce_type_id' => [
          'name' => 'bounce_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Bounce Type'),
          'description' => ts('Type of bounce'),
          'required' => TRUE,
          'where' => 'civicrm_mailing_bounce_pattern.bounce_type_id',
          'table_name' => 'civicrm_mailing_bounce_pattern',
          'entity' => 'BouncePattern',
          'bao' => 'CRM_Mailing_BAO_BouncePattern',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_BounceType',
          'pseudoconstant' => [
            'table' => 'civicrm_mailing_bounce_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => NULL,
        ],
        'pattern' => [
          'name' => 'pattern',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Pattern'),
          'description' => ts('A regexp to match a message to a bounce type'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_mailing_bounce_pattern.pattern',
          'table_name' => 'civicrm_mailing_bounce_pattern',
          'entity' => 'BouncePattern',
          'bao' => 'CRM_Mailing_BAO_BouncePattern',
          'localizable' => 0,
          'add' => NULL,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_bounce_pattern', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_bounce_pattern', $prefix, []);
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
