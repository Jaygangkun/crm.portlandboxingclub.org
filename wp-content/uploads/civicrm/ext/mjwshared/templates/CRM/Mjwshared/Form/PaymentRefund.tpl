{crmScope extensionKey='mjwshared'}
<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="top"}
</div>
<div class="help">{ts}Click "refund" to refund this payment{/ts}</div>
{if $participants}
<div class="description">{ts}Do you want to cancel the following event registrations when you refund the payment?{/ts}</div>

{foreach from=$participants item=participant}
  <div class="crm-section">
    <div class="label">Registration</div>
    <div class="content">{$participant.event_title} - {$participant.participant_status}</div>
    <div class="clear"></div>
  </div>
{/foreach}
<div class="crm-section">
  <div class="label">{$form.cancel_participants.label}</div>
  <div class="content">{$form.cancel_participants.html}</div>
  <div class="clear"></div>
</div>
{/if}

<div class="crm-submit-buttons">
{include file="CRM/common/formButtons.tpl" location="bottom"}
</div>
{/crmScope}
