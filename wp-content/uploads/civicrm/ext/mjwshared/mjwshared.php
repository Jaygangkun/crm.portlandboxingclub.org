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

require_once 'mjwshared.civix.php';
use CRM_Mjwshared_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function mjwshared_civicrm_config(&$config) {
  _mjwshared_civix_civicrm_config($config);

  if (isset(Civi::$statics[__FUNCTION__])) { return; }
  Civi::$statics[__FUNCTION__] = 1;

  // Symfony hook priorities - see https://docs.civicrm.org/dev/en/latest/hooks/usage/symfony/#priorities
  // Make sure this runs after everything else but before minifier
  Civi::dispatcher()->addListener('hook_civicrm_buildAsset', 'mjwshared_symfony_civicrm_buildAsset', -990);
  // This should run before (almost) anything else as we're loading shared libraries
  Civi::dispatcher()->addListener('hook_civicrm_coreResourceList', 'mjwshared_symfony_civicrm_coreResourceList', 1000);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function mjwshared_civicrm_xmlMenu(&$files) {
  _mjwshared_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function mjwshared_civicrm_install() {
  _mjwshared_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function mjwshared_civicrm_postInstall() {
  _mjwshared_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function mjwshared_civicrm_uninstall() {
  _mjwshared_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function mjwshared_civicrm_enable() {
  _mjwshared_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function mjwshared_civicrm_disable() {
  _mjwshared_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function mjwshared_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _mjwshared_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function mjwshared_civicrm_managed(&$entities) {
  _mjwshared_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function mjwshared_civicrm_caseTypes(&$caseTypes) {
  _mjwshared_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function mjwshared_civicrm_angularModules(&$angularModules) {
  _mjwshared_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function mjwshared_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _mjwshared_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function mjwshared_civicrm_entityTypes(&$entityTypes) {
  _mjwshared_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_coreResourceList().
 */
function mjwshared_symfony_civicrm_coreResourceList($event, $hook) {
  if ($event->region === 'html-header') {
    // Load the CRM.payment library
    // We want this library loaded early. Weights are negative earlier, positive later (opposite to symfony).
    // CiviCRM "earliest" is -9999 we'll go with -2000 to load after CiviCRM core but before anything else.
    \Civi::resources()->addScriptUrl(\Civi::service('asset_builder')->getUrl(
      'crm.payment.js',
      [
        'path' => \Civi::resources()->getPath(E::LONG_NAME, 'js/crm.payment.js'),
        'mimetype' => 'application/javascript',
      ]
    ), -2000, $event->region);
  }
}

/**
 * Implements hook_civicrm_check().
 *
 * @throws \CiviCRM_API3_Exception
 */
function mjwshared_civicrm_check(&$messages) {
  CRM_Mjwshared_Check::checkRequirements($messages);
}

/**
 * @param \Civi\Core\Event\GenericHookEvent $event
 * @param $hook
 *
 * @throws \CiviCRM_API3_Exception
 */
function mjwshared_symfony_civicrm_buildAsset($event, $hook) {
  $extensions = civicrm_api3('Extension', 'get', [
    'full_name' => "minifier",
  ]);
  if (empty($extensions['id']) || ($extensions['values'][$extensions['id']]['status'] !== 'installed')) {
    if (empty($event->content) && !empty($event->params['path'])) {
      $event->content = file_get_contents($event->params['path']);
    }
    if (empty($event->mimeType) && !empty($event->params['mimetype'])) {
      $event->mimeType = $event->params['mimetype'];
    }
  }
}

/**
 * Implements hook_civicrm_links
 * Add links to membership list on contacts tab to view/setup direct debit
 *
 * @param $op
 * @param $objectName
 * @param $objectId
 * @param $links
 * @param $mask
 * @param $values
 */
function mjwshared_civicrm_links($op, $objectName, $objectId, &$links, &$mask, &$values) {
  if ($objectName === 'Payment' && $op === 'Payment.edit.action') {
    if ((boolean)\Civi::settings()->get('mjwshared_refundpaymentui') === FALSE) {
      return;
    }
    if (!CRM_Core_Permission::check('edit contributions')) {
      return;
    }

    try {
      $contribution = reset(civicrm_api3('Mjwpayment', 'get_contribution', [
        'payment_id' => $values['id'],
        'contribution_test' => ['IS NOT NULL' => 1],
      ])['values']);
      // Don't allow refunds if contribution status is "Refunded"
      if ((int)$contribution['contribution_status_id'] === CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Refunded')) {
        return;
      }
      $payment = $contribution['payments'][$values['id']];
      // Don't allow refunds if payment status is not "Completed"
      if ((int)$payment['status_id'] !== CRM_Core_PseudoConstant::getKey('CRM_Contribute_BAO_Contribution', 'contribution_status_id', 'Completed')) {
        return;
      }
      // Don't allow refunds if we have no trxn_id to match it against.
      if (empty($payment['trxn_id'])) {
        return;
      }
      if ($payment['total_amount'] < 0) {
        return;
      }
      $paymentProcessor = \Civi\Payment\System::singleton()
        ->getById($payment['payment_processor_id']);
      if ($paymentProcessor->supportsRefund()) {
        // Add the refund link to the payment
        $links[] = [
          'name' => 'Refund Payment',
          'icon' => 'fa-undo',
          'url' => 'civicrm/mjwpayment/refund',
          'class' => 'medium-popup',
          'qs' => 'reset=1&id=%%id%%&contribution_id=%%contribution_id%%',
          'title' => 'Refund Payment',
        ];
      }
    }
    catch (Exception $e) {
      // Do nothing. We just don't add the "refund" link.
    }
  }
}
