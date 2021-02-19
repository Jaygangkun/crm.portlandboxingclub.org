<?php /* Smarty version 2.6.31, created on 2021-02-18 00:19:41
         compiled from string:%7Bassign+var%3D%22greeting%22+value%3D%22Dear+Eileen%22%7D%7Bif+%24greeting%7D%7B%24greeting%7D%2C%7B/if%7D%0A%0A%7Bif+%24formValues.receipt_text_signup%7D%0A%7B%24formValues.receipt_text_signup%7D%0A%7Belseif+%24formValues.receipt_text_renewal%7D%0A%7B%24formValues.receipt_text_renewal%7D%0A%7Belse%7D%7Bts%7DThank+you+for+this+contribution.%7B/ts%7D%7B/if%7D%0A%0A%7Bif+%21%24lineItem%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DMembership+Information%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DMembership+Type%7B/ts%7D:+%7B%24membership_name%7D%0A%7B/if%7D%0A%7Bif+%21+%24cancelled%7D%0A%7Bif+%21%24lineItem%7D%0A%7Bts%7DMembership+Start+Date%7B/ts%7D:+%7B%24mem_start_date%7D%0A%7Bts%7DMembership+End+Date%7B/ts%7D:+%7B%24mem_end_date%7D%0A%7B/if%7D%0A%0A%7Bif+%24formValues.total_amount+OR+%24formValues.total_amount+eq+0+%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DMembership+Fee%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bif+%24formValues.contributionType_name%7D%0A%7Bts%7DFinancial+Type%7B/ts%7D:+%7B%24formValues.contributionType_name%7D%0A%7B/if%7D%0A%7Bif+%24lineItem%7D%0A%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A%7Bcapture+assign%3Dts_item%7D%7Bts%7DItem%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_total%7D%7Bts%7DFee%7B/ts%7D%7B/capture%7D%0A%7Bif+%24dataArray%7D%0A%7Bcapture+assign%3Dts_subtotal%7D%7Bts%7DSubtotal%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxRate%7D%7Bts%7DTax+Rate%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxAmount%7D%7Bts%7DTax+Amount%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_total%7D%7Bts%7DTotal%7B/ts%7D%7B/capture%7D%0A%7B/if%7D%0A%7Bcapture+assign%3Dts_start_date%7D%7Bts%7DMembership+Start+Date%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_end_date%7D%7Bts%7DMembership+End+Date%7B/ts%7D%7B/capture%7D%0A%7B%24ts_item%7Cstring_format:%22%25-30s%22%7D+%7B%24ts_total%7Cstring_format:%22%2510s%22%7D+%7Bif+%24dataArray%7D+%7B%24ts_subtotal%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxRate%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxAmount%7Cstring_format:%22%2510s%22%7D+%7B%24ts_total%7Cstring_format:%22%2510s%22%7D+%7B/if%7D+%7B%24ts_start_date%7Cstring_format:%22%2520s%22%7D+%7B%24ts_end_date%7Cstring_format:%22%2520s%22%7D%0A--------------------------------------------------------------------------------------------------%0A%0A%7Bforeach+from%3D%24value+item%3Dline%7D%0A%7Bcapture+assign%3Dts_item%7D%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D+%7B%24line.description%7D%7B/if%7D%7B/capture%7D%7B%24ts_item%7Ctruncate:30:%22...%22%7Cstring_format:%22%25-30s%22%7D+%7B%24line.line_total%7CcrmMoney%7Cstring_format:%22%2510s%22%7D++%7Bif+%24dataArray%7D+%7B%24line.unit_price%2A%24line.qty%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Bif+%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%7D++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D+%25++%7B%24line.tax_amount%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D++%7Belse%7D++++++++++++++++++%7B/if%7D+++%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney%7Cstring_format:%22%2510s%22%7D+%7B/if%7D+%7B%24line.start_date%7Cstring_format:%22%2520s%22%7D+%7B%24line.end_date%7Cstring_format:%22%2520s%22%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%0A%7Bif+%24dataArray%7D%0A%7Bts%7DAmount+before+Tax%7B/ts%7D:+%7B%24formValues.total_amount-%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%0A%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A%7Bif+%24priceset%7D%0A%7B%24taxTerm%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D+%25:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7Belseif++%24priceset+%3D%3D+0%7D%0A%7Bts%7DNo%7B/ts%7D+%7B%24taxTerm%7D:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A--------------------------------------------------------------------------------------------------%0A%7B/if%7D%0A%0A%7Bif+isset%28%24totalTaxAmount%29%7D%0A%7Bts%7DTotal+Tax+Amount%7B/ts%7D:+%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%0A%7Bts%7DAmount%7B/ts%7D:+%7B%24formValues.total_amount%7CcrmMoney%7D%0A%7Bif+%24receive_date%7D%0A%7Bts%7DDate+Received%7B/ts%7D:+%7B%24receive_date%7Ctruncate:10:%27%27%7CcrmDate%7D%0A%7B/if%7D%0A%7Bif+%24formValues.paidBy%7D%0A%7Bts%7DPaid+By%7B/ts%7D:+%7B%24formValues.paidBy%7D%0A%7Bif+%24formValues.check_number%7D%0A%7Bts%7DCheck+Number%7B/ts%7D:+%7B%24formValues.check_number%7D%0A%7B/if%7D%0A%7B/if%7D%0A%7B/if%7D%0A%7B/if%7D%0A%0A%7Bif+%24isPrimary+%7D%0A%7Bif+%24billingName%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7B%24billingName%7D%0A%7B%24address%7D%0A%7B/if%7D%0A%0A%7Bif+%24credit_card_type%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DCredit+Card+Information%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7B%24credit_card_type%7D%0A%7B%24credit_card_number%7D%0A%7Bts%7DExpires%7B/ts%7D:+%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A%7B/if%7D%0A%7B/if%7D%0A%0A%7Bif+%24customValues%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DMembership+Options%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bforeach+from%3D%24customValues+item%3Dvalue+key%3DcustomName%7D%0A+%7B%24customName%7D+:+%7B%24value%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 1, false),array('block', 'ts', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 7, false),array('modifier', 'string_format', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 42, false),array('modifier', 'truncate', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 46, false),array('modifier', 'crmMoney', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 46, false),array('modifier', 'crmDate', 'string:{assign var="greeting" value="Dear Eileen"}{if $greeting}{$greeting},{/if}

{if $formValues.receipt_text_signup}
{$formValues.receipt_text_signup}
{elseif $formValues.receipt_text_renewal}
{$formValues.receipt_text_renewal}
{else}{ts}Thank you for this contribution.{/ts}{/if}

{if !$lineItem}
===========================================================
{ts}Membership Information{/ts}

===========================================================
{ts}Membership Type{/ts}: {$membership_name}
{/if}
{if ! $cancelled}
{if !$lineItem}
{ts}Membership Start Date{/ts}: {$mem_start_date}
{ts}Membership End Date{/ts}: {$mem_end_date}
{/if}

{if $formValues.total_amount OR $formValues.total_amount eq 0 }
===========================================================
{ts}Membership Fee{/ts}

===========================================================
{if $formValues.contributionType_name}
{ts}Financial Type{/ts}: {$formValues.contributionType_name}
{/if}
{if $lineItem}
{foreach from=$lineItem item=value key=priceset}
{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_total}{ts}Fee{/ts}{/capture}
{if $dataArray}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{/if}
{capture assign=ts_start_date}{ts}Membership Start Date{/ts}{/capture}
{capture assign=ts_end_date}{ts}Membership End Date{/ts}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_total|string_format:"%10s"} {if $dataArray} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {$ts_total|string_format:"%10s"} {/if} {$ts_start_date|string_format:"%20s"} {$ts_end_date|string_format:"%20s"}
--------------------------------------------------------------------------------------------------

{foreach from=$value item=line}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.line_total|crmMoney|string_format:"%10s"}  {if $dataArray} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if $line.tax_rate != "" || $line.tax_amount != ""}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"}  {else}                  {/if}   {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {/if} {$line.start_date|string_format:"%20s"} {$line.end_date|string_format:"%20s"}
{/foreach}
{/foreach}

{if $dataArray}
{ts}Amount before Tax{/ts}: {$formValues.total_amount-$totalTaxAmount|crmMoney:$currency}

{foreach from=$dataArray item=value key=priceset}
{if $priceset}
{$taxTerm} {$priceset|string_format:"%.2f"} %: {$value|crmMoney:$currency}
{elseif  $priceset == 0}
{ts}No{/ts} {$taxTerm}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
--------------------------------------------------------------------------------------------------
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}

{ts}Amount{/ts}: {$formValues.total_amount|crmMoney}
{if $receive_date}
{ts}Date Received{/ts}: {$receive_date|truncate:10:\'\'|crmDate}
{/if}
{if $formValues.paidBy}
{ts}Paid By{/ts}: {$formValues.paidBy}
{if $formValues.check_number}
{ts}Check Number{/ts}: {$formValues.check_number}
{/if}
{/if}
{/if}
{/if}

{if $isPrimary }
{if $billingName}

===========================================================
{ts}Billing Name and Address{/ts}

===========================================================
{$billingName}
{$address}
{/if}

{if $credit_card_type}
===========================================================
{ts}Credit Card Information{/ts}

===========================================================
{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}

{if $customValues}
===========================================================
{ts}Membership Options{/ts}

===========================================================
{foreach from=$customValues item=value key=customName}
 {$customName} : {$value}
{/foreach}
{/if}
', 70, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('greeting', 'Dear Eileen'); ?><?php if ($this->_tpl_vars['greeting']): ?><?php echo $this->_tpl_vars['greeting']; ?>
,<?php endif; ?>

<?php if ($this->_tpl_vars['formValues']['receipt_text_signup']): ?>
<?php echo $this->_tpl_vars['formValues']['receipt_text_signup']; ?>

<?php elseif ($this->_tpl_vars['formValues']['receipt_text_renewal']): ?>
<?php echo $this->_tpl_vars['formValues']['receipt_text_renewal']; ?>

<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank you for this contribution.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>

<?php if (! $this->_tpl_vars['lineItem']): ?>
===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['membership_name']; ?>

<?php endif; ?>
<?php if (! $this->_tpl_vars['cancelled']): ?>
<?php if (! $this->_tpl_vars['lineItem']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['mem_start_date']; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['mem_end_date']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['formValues']['total_amount'] || $this->_tpl_vars['formValues']['total_amount'] == 0): ?>
===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================
<?php if ($this->_tpl_vars['formValues']['contributionType_name']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['formValues']['contributionType_name']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['lineItem']): ?>
<?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_total', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['dataArray']): ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subtotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_subtotal', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxRate', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxAmount', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_total', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_start_date', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_end_date', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if ($this->_tpl_vars['dataArray']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_subtotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxRate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_start_date'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%20s") : smarty_modifier_string_format($_tmp, "%20s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_end_date'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%20s") : smarty_modifier_string_format($_tmp, "%20s")); ?>

--------------------------------------------------------------------------------------------------

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
<?php ob_start(); ?><?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?> <?php echo $this->_tpl_vars['line']['description']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['line_total'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
  <?php if ($this->_tpl_vars['dataArray']): ?> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if ($this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != ""): ?>  <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %  <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
  <?php else: ?>                  <?php endif; ?>   <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['start_date'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%20s") : smarty_modifier_string_format($_tmp, "%20s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['end_date'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%20s") : smarty_modifier_string_format($_tmp, "%20s")); ?>

<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['dataArray']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount before Tax<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['total_amount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>


<?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
<?php if ($this->_tpl_vars['priceset']): ?>
<?php echo $this->_tpl_vars['taxTerm']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php elseif ($this->_tpl_vars['priceset'] == 0): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['taxTerm']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
--------------------------------------------------------------------------------------------------
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

<?php if ($this->_tpl_vars['receive_date']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['formValues']['paidBy']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['formValues']['paidBy']; ?>

<?php if ($this->_tpl_vars['formValues']['check_number']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['formValues']['check_number']; ?>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['isPrimary']): ?>
<?php if ($this->_tpl_vars['billingName']): ?>

===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================
<?php echo $this->_tpl_vars['billingName']; ?>

<?php echo $this->_tpl_vars['address']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['credit_card_type']): ?>
===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================
<?php echo $this->_tpl_vars['credit_card_type']; ?>

<?php echo $this->_tpl_vars['credit_card_number']; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['customValues']): ?>
===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================
<?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
 <?php echo $this->_tpl_vars['customName']; ?>
 : <?php echo $this->_tpl_vars['value']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>