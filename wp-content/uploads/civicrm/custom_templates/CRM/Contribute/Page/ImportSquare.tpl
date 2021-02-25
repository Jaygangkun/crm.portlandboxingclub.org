{*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
*}
{literal}
<style>
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #696969;
  border-radius: 50%;
  width: 13px;
  height: 13px;
  animation: spin 2s linear infinite;

  display: none;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.crm-submit-buttons--loading{
  display: flex;
  align-items: center;
}

.loading .loader{
  display: block;
}

#import_status{
  display: none;
  margin-left: 10px;
}

.loading #import_status{
  display: block;
}
</style>
{/literal}
<div class="crm-submit-buttons crm-submit-buttons--loading">
  <span class="crm-button" id="btn_import_square">Import</span>
  <div class="loader"></div>
  <span class="" id="import_status"></span>
</div>
<table class="form-layout-compressed">
  <tbody>
    <tr class="crm-contribution-form-block-source">
      <td class="label1"><label for="source">Access Token</label></td>
      <td>
        <input type="text" id="square_token" class="huge crm-form-text" value="EAAAED4JOQ-PE7wvP1-ormGI_y_kIyLX4KZd2wJMMoRHSIZfn_DkDU9h0q5xtL0a">
      </td>
    </tr>
  </tbody>
</table>
{literal}
<script>
  var api_url = '{/literal}{php}echo get_site_url(){/php}{literal}/wp-content/uploads/civicrm/custom_api/import_square.php';
</script>
<script src="{/literal}{php}echo get_site_url(){/php}{literal}/wp-content/uploads/civicrm/custom_templates/CRM/Contribute/Page/ImportSquare.js"></script>
{/literal}