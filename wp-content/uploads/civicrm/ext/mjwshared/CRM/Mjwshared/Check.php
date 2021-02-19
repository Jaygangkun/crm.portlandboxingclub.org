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

use CRM_Mjwshared_ExtensionUtil as E;

/**
 * Class CRM_Mjwshared_Check
 */
class CRM_Mjwshared_Check {

  public static function checkRequirements(&$messages) {
    self::checkExtensionWorldpay($messages);
    self::checkExtensionMinifier($messages);
    self::checkExtensionContributiontransactlegacy($messages);
  }

  /**
   * @param array $messages
   *
   * @throws \CiviCRM_API3_Exception
   */
  private static function checkExtensionWorldpay(&$messages) {
    $extensions = civicrm_api3('Extension', 'get', [
      'full_name' => 'uk.co.nfpservice.onlineworldpay',
    ]);

    if (!empty($extensions['id']) && ($extensions['values'][$extensions['id']]['status'] === 'installed')) {
      $messages[] = new CRM_Utils_Check_Message(
        __FUNCTION__ . 'mjwshared_incompatible',
        E::ts('You have the uk.co.nfpservice.onlineworldpay extension installed.
        There are multiple versions of this extension on various sites and the source code has not been released.
        It is known to be cause issues with other payment processors and should be disabled'),
        E::ts('Incompatible Extension: uk.co.nfpservice.onlineworldpay'),
        \Psr\Log\LogLevel::WARNING,
        'fa-money'
      );
    }
  }

  /**
   * @param array $messages
   *
   * @throws \CiviCRM_API3_Exception
   */
  private static function checkExtensionMinifier(&$messages) {
    $extensionName = 'minifier';
    $extensions = civicrm_api3('Extension', 'get', [
      'full_name' => $extensionName,
    ]);

    if (empty($extensions['id']) || ($extensions['values'][$extensions['id']]['status'] !== 'installed')) {
      $message = new CRM_Utils_Check_Message(
        __FUNCTION__ . 'mjwshared_recommended',
        E::ts('It is recommended that you download and install the <strong><a href="https://civicrm.org/extensions/minifier">minifier</a></strong> extension.
               This will improve the page-load speeds for JS/CSS assets included with extensions such as <strong><a href="https://civicrm.org/extensions/stripe-payment-processor">Stripe</a></strong>.'),
        E::ts('Recommended Extension: minifier'),
        \Psr\Log\LogLevel::NOTICE,
        'fa-lightbulb-o'
      );
      $message->addAction(
        E::ts('Install now'),
        NULL,
        'href',
        ['path' => 'civicrm/admin/extensions', 'query' => ['action' => 'update', 'id' => $extensionName, 'key' => $extensionName]]
      );
      $messages[] = $message;
    }
  }

  /**
   * @param array $messages
   *
   * @throws \CiviCRM_API3_Exception
   */
  private static function checkExtensionContributiontransactlegacy(&$messages) {
    $extensionName = 'contributiontransactlegacy';
    // Only on Drupal - do we have webform_civicrm installed?
    if (function_exists('module_exists')) {
      $extensions = civicrm_api3('Extension', 'get', [
        'full_name' => $extensionName,
      ]);

      if (module_exists('webform_civicrm') && (empty($extensions['id']) || ($extensions['values'][$extensions['id']]['status'] !== 'installed'))) {
        $message = new CRM_Utils_Check_Message(
          __FUNCTION__ . 'mjwshared_recommended',
          E::ts('If you are using Drupal webform_civicrm to accept payments you should download and install the
            <strong><a href="https://civicrm.org/extensions/contribution-transact-api">contributiontransactlegacy</a></strong> extension.
            This fixes a number of issues that cause payments to fail with extensions such as <strong><a href="https://civicrm.org/extensions/stripe-payment-processor">Stripe</a></strong>.'),
          E::ts('Recommended Extension: contributiontransactlegacy'),
          \Psr\Log\LogLevel::WARNING,
          'fa-lightbulb-o'
        );
        $message->addAction(
          E::ts('Install now'),
          NULL,
          'href',
          ['path' => 'civicrm/admin/extensions', 'query' => ['action' => 'update', 'id' => $extensionName, 'key' => $extensionName]]
        );
        $messages[] = $message;
      }
    }
  }



}
