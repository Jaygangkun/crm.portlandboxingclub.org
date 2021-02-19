<?php /* Smarty version 2.6.31, created on 2021-02-18 00:19:41
         compiled from string:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0A%3Chtml+xmlns%3D%22http://www.w3.org/1999/xhtml%22%3E%0A%3Chead%3E%0A+%3Cmeta+http-equiv%3D%22Content-Type%22+content%3D%22text/html%3B+charset%3DUTF-8%22+/%3E%0A+%3Ctitle%3E%3C/title%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%0A%7Bcapture+assign%3DheaderStyle%7Dcolspan%3D%222%22+style%3D%22text-align:+left%3B+padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23eee%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DlabelStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23f7f7f7%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DvalueStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B%22%7B/capture%7D%0A%0A%3Ccenter%3E%0A++%3Ctable+id%3D%22crm-event_receipt%22+style%3D%22font-family:+Arial%2C+Verdana%2C+sans-serif%3B+text-align:+left%3B+width:100%25%3B+max-width:700px%3B+padding:0%3B+margin:0%3B+border:0px%3B%22%3E%0A%0A++%3C%21--+BEGIN+HEADER+--%3E%0A++%3C%21--+You+can+add+table+row%28s%29+here+with+logo+or+other+header+elements+--%3E%0A++%3C%21--+END+HEADER+--%3E%0A%0A++%3C%21--+BEGIN+CONTENT+--%3E%0A%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++++%7Bassign+var%3D%22greeting%22+value%3D%22Dear+Eileen%22%7D%7Bif+%24greeting%7D%3Cp%3E%7B%24greeting%7D%2C%3C/p%3E%7B/if%7D%0A++++%7Bif+%24formValues.receipt_text_signup%7D%0A+++++%3Cp%3E%7B%24formValues.receipt_text_signup%7Chtmlize%7D%3C/p%3E%0A++++%7Belseif+%24formValues.receipt_text_renewal%7D%0A+++++%3Cp%3E%7B%24formValues.receipt_text_renewal%7Chtmlize%7D%3C/p%3E%0A++++%7Belse%7D%0A+++++%3Cp%3E%7Bts%7DThank+you+for+this+contribution.%7B/ts%7D%3C/p%3E%0A++++%7B/if%7D%0A+++%3C/td%3E%0A++%3C/tr%3E%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++++%3Ctable+style%3D%22border:+1px+solid+%23999%3B+margin:+1em+0em+1em%3B+border-collapse:+collapse%3B+width:100%25%3B%22%3E%0A+++++%7Bif+%21%24lineItem%7D%0A+++++%3Ctr%3E%0A++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++%7Bts%7DMembership+Information%7B/ts%7D%0A++++++%3C/th%3E%0A+++++%3C/tr%3E%0A+++++%3Ctr%3E%0A++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++%7Bts%7DMembership+Type%7B/ts%7D%0A++++++%3C/td%3E%0A++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++%7B%24membership_name%7D%0A++++++%3C/td%3E%0A+++++%3C/tr%3E%0A+++++%7B/if%7D%0A+++++%7Bif+%21+%24cancelled%7D%0A+++++%7Bif+%21%24lineItem%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DMembership+Start+Date%7B/ts%7D%0A+++++++%3C/td%3E%0A+++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++%7B%24mem_start_date%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A++++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DMembership+End+Date%7B/ts%7D%0A+++++++%3C/td%3E%0A+++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++%7B%24mem_end_date%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A++++++%7B/if%7D%0A++++++%7Bif+%24formValues.total_amount+OR+%24formValues.total_amount+eq+0+%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7Bts%7DMembership+Fee%7B/ts%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bif+%24formValues.contributionType_name%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DFinancial+Type%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24formValues.contributionType_name%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24lineItem%7D%0A+++++++%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A+++++++++%3Ctr%3E%0A++++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A+++++++++++%3Ctable%3E+%7B%2A+FIXME:+style+this+table+so+that+it+looks+like+the+text+version+%28justification%2C+etc.%29+%2A%7D%0A++++++++++++%3Ctr%3E%0A+++++++++++++%3Cth%3E%7Bts%7DItem%7B/ts%7D%3C/th%3E%0A+++++++++++++%3Cth%3E%7Bts%7DFee%7B/ts%7D%3C/th%3E%0A+++++++++++++%7Bif+%24dataArray%7D%0A++++++++++++++%3Cth%3E%7Bts%7DSubTotal%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Rate%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Amount%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTotal%7B/ts%7D%3C/th%3E%0A+++++++++++++%7B/if%7D%0A+++++++%3Cth%3E%7Bts%7DMembership+Start+Date%7B/ts%7D%3C/th%3E%0A+++++++%3Cth%3E%7Bts%7DMembership+End+Date%7B/ts%7D%3C/th%3E%0A++++++++++++%3C/tr%3E%0A++++++++++++%7Bforeach+from%3D%24value+item%3Dline%7D%0A+++++++++++++%3Ctr%3E%0A++++++++++++++%3Ctd%3E%0A++++++++%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D%3Cdiv%3E%7B%24line.description%7Ctruncate:30:%22...%22%7D%3C/div%3E%7B/if%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.line_total%7CcrmMoney%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%7Bif+%24dataArray%7D%0A+++++++++++++++%3Ctd%3E%0A++++++++++++++++%7B%24line.unit_price%2A%24line.qty%7CcrmMoney%7D%0A+++++++++++++++%3C/td%3E%0A+++++++++++++++%7Bif+%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%7D%0A++++++++++++++++%3Ctd%3E%0A+++++++++++++++++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D%25%0A++++++++++++++++%3C/td%3E%0A++++++++++++++++%3Ctd%3E%0A+++++++++++++++++%7B%24line.tax_amount%7CcrmMoney%7D%0A++++++++++++++++%3C/td%3E%0A+++++++++++++++%7Belse%7D%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A+++++++++++++++%7B/if%7D%0A+++++++++++++++%3Ctd%3E%0A++++++++++++++++%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney%7D%0A+++++++++++++++%3C/td%3E%0A++++++++++++++%7B/if%7D%0A++++++++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.start_date%7D%0A++++++++++++++%3C/td%3E%0A++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.end_date%7D%0A++++++++++++++%3C/td%3E%0A+++++++++++++%3C/tr%3E%0A++++++++++++%7B/foreach%7D%0A+++++++++++%3C/table%3E%0A++++++++++%3C/td%3E%0A+++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A+++++++%7Bif+%24dataArray%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DAmount+Before+Tax:%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24formValues.total_amount-%24totalTaxAmount%7CcrmMoney%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A++++++++%3Ctr%3E%0A++++++++%7Bif+%24priceset%7D%0A+++++++++%3Ctd%3E%26nbsp%3B%7B%24taxTerm%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D%25%3C/td%3E%0A+++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A++++++++%7Belseif++%24priceset+%3D%3D+0%7D%0A+++++++++%3Ctd%3E%26nbsp%3B%7Bts%7DNo%7B/ts%7D+%7B%24taxTerm%7D%3C/td%3E%0A+++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A++++++++%7B/if%7D%0A++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A++++++%7B/if%7D%0A++++++%7B/if%7D%0A++++++%7Bif+isset%28%24totalTaxAmount%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DTotal+Tax+Amount%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DAmount%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24formValues.total_amount%7CcrmMoney%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bif+%24receive_date%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DDate+Received%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24receive_date%7Ctruncate:10:%27%27%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A+++++++%7Bif+%24formValues.paidBy%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DPaid+By%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24formValues.paidBy%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A++++++++%7Bif+%24formValues.check_number%7D%0A+++++++++%3Ctr%3E%0A++++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++++%7Bts%7DCheck+Number%7B/ts%7D%0A++++++++++%3C/td%3E%0A++++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++++%7B%24formValues.check_number%7D%0A++++++++++%3C/td%3E%0A+++++++++%3C/tr%3E%0A++++++++%7B/if%7D%0A+++++++%7B/if%7D%0A++++++%7B/if%7D%0A+++++%7B/if%7D%0A++++%3C/table%3E%0A+++%3C/td%3E%0A++%3C/tr%3E%0A%0A++%7Bif+%24isPrimary%7D%0A+++%3Ctr%3E%0A++++%3Ctd%3E%0A+++++%3Ctable+style%3D%22border:+1px+solid+%23999%3B+margin:+1em+0em+1em%3B+border-collapse:+collapse%3B+width:100%25%3B%22%3E%0A%0A++++++%7Bif+%24billingName%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7B%24billingName%7D%3Cbr+/%3E%0A+++++++++%7B%24address%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/if%7D%0A%0A++++++%7Bif+%24credit_card_type%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7Bts%7DCredit+Card+Information%7B/ts%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24credit_card_type%7D%3Cbr+/%3E%0A+++++++++%7B%24credit_card_number%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DExpires%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/if%7D%0A%0A+++++%3C/table%3E%0A++++%3C/td%3E%0A+++%3C/tr%3E%0A++%7B/if%7D%0A%0A++%7Bif+%24customValues%7D%0A+++%3Ctr%3E%0A++++%3Ctd%3E%0A+++++%3Ctable+style%3D%22border:+1px+solid+%23999%3B+margin:+1em+0em+1em%3B+border-collapse:+collapse%3B+width:100%25%3B%22%3E%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7Bts%7DMembership+Options%7B/ts%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A++++++%7Bforeach+from%3D%24customValues+item%3Dvalue+key%3DcustomName%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7B%24customName%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24value%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/foreach%7D%0A+++++%3C/table%3E%0A++++%3C/td%3E%0A+++%3C/tr%3E%0A++%7B/if%7D%0A%0A+%3C/table%3E%0A%3C/center%3E%0A%0A%3C/body%3E%0A%3C/html%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 1, false),array('block', 'ts', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 30, false),array('modifier', 'htmlize', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 26, false),array('modifier', 'truncate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 108, false),array('modifier', 'crmMoney', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 111, false),array('modifier', 'string_format', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 119, false),array('modifier', 'crmDate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Eileen"}{if $greeting}<p>{$greeting},</p>{/if}
    {if $formValues.receipt_text_signup}
     <p>{$formValues.receipt_text_signup|htmlize}</p>
    {elseif $formValues.receipt_text_renewal}
     <p>{$formValues.receipt_text_renewal|htmlize}</p>
    {else}
     <p>{ts}Thank you for this contribution.{/ts}</p>
    {/if}
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     {if !$lineItem}
     <tr>
      <th {$headerStyle}>
       {ts}Membership Information{/ts}
      </th>
     </tr>
     <tr>
      <td {$labelStyle}>
       {ts}Membership Type{/ts}
      </td>
      <td {$valueStyle}>
       {$membership_name}
      </td>
     </tr>
     {/if}
     {if ! $cancelled}
     {if !$lineItem}
      <tr>
       <td {$labelStyle}>
        {ts}Membership Start Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_start_date}
       </td>
      </tr>
      <tr>
       <td {$labelStyle}>
        {ts}Membership End Date{/ts}
       </td>
       <td {$valueStyle}>
        {$mem_end_date}
       </td>
      </tr>
      {/if}
      {if $formValues.total_amount OR $formValues.total_amount eq 0 }
       <tr>
        <th {$headerStyle}>
         {ts}Membership Fee{/ts}
        </th>
       </tr>
       {if $formValues.contributionType_name}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.contributionType_name}
         </td>
        </tr>
       {/if}

       {if $lineItem}
       {foreach from=$lineItem item=value key=priceset}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Fee{/ts}</th>
             {if $dataArray}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
              <th>{ts}Total{/ts}</th>
             {/if}
       <th>{ts}Membership Start Date{/ts}</th>
       <th>{ts}Membership End Date{/ts}</th>
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.line_total|crmMoney}
              </td>
              {if $dataArray}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if $line.tax_rate != "" || $line.tax_amount != ""}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
               <td>
                {$line.line_total+$line.tax_amount|crmMoney}
               </td>
              {/if}
              <td>
               {$line.start_date}
              </td>
        <td>
               {$line.end_date}
              </td>
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
       {/foreach}
       {if $dataArray}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.total_amount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
       {foreach from=$dataArray item=value key=priceset}
        <tr>
        {if $priceset}
         <td>&nbsp;{$taxTerm} {$priceset|string_format:"%.2f"}%</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {elseif  $priceset == 0}
         <td>&nbsp;{ts}No{/ts} {$taxTerm}</td>
         <td>&nbsp;{$value|crmMoney:$currency}</td>
        {/if}
        </tr>
       {/foreach}
      {/if}
      {/if}
      {if isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Total Tax Amount{/ts}
         </td>
         <td {$valueStyle}>
          {$totalTaxAmount|crmMoney:$currency}
         </td>
        </tr>
       {/if}
       <tr>
        <td {$labelStyle}>
         {ts}Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$formValues.total_amount|crmMoney}
        </td>
       </tr>
       {if $receive_date}
        <tr>
         <td {$labelStyle}>
          {ts}Date Received{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|truncate:10:\'\'|crmDate}
         </td>
        </tr>
       {/if}
       {if $formValues.paidBy}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
          {$formValues.paidBy}
         </td>
        </tr>
        {if $formValues.check_number}
         <tr>
          <td {$labelStyle}>
           {ts}Check Number{/ts}
          </td>
          <td {$valueStyle}>
           {$formValues.check_number}
          </td>
         </tr>
        {/if}
       {/if}
      {/if}
     {/if}
    </table>
   </td>
  </tr>

  {if $isPrimary}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      {if $billingName}
       <tr>
        <th {$headerStyle}>
         {ts}Billing Name and Address{/ts}
        </th>
       </tr>
       <tr>
        <td {$labelStyle}>
         {$billingName}<br />
         {$address}
        </td>
       </tr>
      {/if}

      {if $credit_card_type}
       <tr>
        <th {$headerStyle}>
         {ts}Credit Card Information{/ts}
        </th>
       </tr>
       <tr>
        <td {$valueStyle}>
         {$credit_card_type}<br />
         {$credit_card_number}
        </td>
       </tr>
       <tr>
        <td {$labelStyle}>
         {ts}Expires{/ts}
        </td>
        <td {$valueStyle}>
         {$credit_card_exp_date|truncate:7:\'\'|crmDate}
        </td>
       </tr>
      {/if}

     </table>
    </td>
   </tr>
  {/if}

  {if $customValues}
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th {$headerStyle}>
        {ts}Membership Options{/ts}
       </th>
      </tr>
      {foreach from=$customValues item=value key=customName}
       <tr>
        <td {$labelStyle}>
         {$customName}
        </td>
        <td {$valueStyle}>
         {$value}
        </td>
       </tr>
      {/foreach}
     </table>
    </td>
   </tr>
  {/if}

 </table>
</center>

</body>
</html>
', 190, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

<?php ob_start(); ?>colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('headerStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('labelStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('valueStyle', ob_get_contents());ob_end_clean(); ?>

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    <?php $this->assign('greeting', 'Dear Eileen'); ?><?php if ($this->_tpl_vars['greeting']): ?><p><?php echo $this->_tpl_vars['greeting']; ?>
,</p><?php endif; ?>
    <?php if ($this->_tpl_vars['formValues']['receipt_text_signup']): ?>
     <p><?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['receipt_text_signup'])) ? $this->_run_mod_handler('htmlize', true, $_tmp) : smarty_modifier_htmlize($_tmp)); ?>
</p>
    <?php elseif ($this->_tpl_vars['formValues']['receipt_text_renewal']): ?>
     <p><?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['receipt_text_renewal'])) ? $this->_run_mod_handler('htmlize', true, $_tmp) : smarty_modifier_htmlize($_tmp)); ?>
</p>
    <?php else: ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank you for this contribution.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php endif; ?>
   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <?php if (! $this->_tpl_vars['lineItem']): ?>
     <tr>
      <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
       <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </th>
     </tr>
     <tr>
      <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
       <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </td>
      <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
       <?php echo $this->_tpl_vars['membership_name']; ?>

      </td>
     </tr>
     <?php endif; ?>
     <?php if (! $this->_tpl_vars['cancelled']): ?>
     <?php if (! $this->_tpl_vars['lineItem']): ?>
      <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
       <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['mem_start_date']; ?>

       </td>
      </tr>
      <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
       <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['mem_end_date']; ?>

       </td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['formValues']['total_amount'] || $this->_tpl_vars['formValues']['total_amount'] == 0): ?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </th>
       </tr>
       <?php if ($this->_tpl_vars['formValues']['contributionType_name']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['formValues']['contributionType_name']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['lineItem']): ?>
       <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
         <tr>
          <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
           <table>             <tr>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php if ($this->_tpl_vars['dataArray']): ?>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SubTotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php endif; ?>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
            </tr>
            <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
             <tr>
              <td>
        <?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?><div><?php echo ((is_array($_tmp=$this->_tpl_vars['line']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")); ?>
</div><?php endif; ?>
              </td>
              <td>
               <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['line_total'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

              </td>
              <?php if ($this->_tpl_vars['dataArray']): ?>
               <td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

               </td>
               <?php if ($this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != ""): ?>
                <td>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%
                </td>
                <td>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

                </td>
               <?php else: ?>
                <td></td>
                <td></td>
               <?php endif; ?>
               <td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

               </td>
              <?php endif; ?>
              <td>
               <?php echo $this->_tpl_vars['line']['start_date']; ?>

              </td>
        <td>
               <?php echo $this->_tpl_vars['line']['end_date']; ?>

              </td>
             </tr>
            <?php endforeach; endif; unset($_from); ?>
           </table>
          </td>
         </tr>
       <?php endforeach; endif; unset($_from); ?>
       <?php if ($this->_tpl_vars['dataArray']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount Before Tax:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['total_amount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

         </td>
        </tr>
       <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
        <tr>
        <?php if ($this->_tpl_vars['priceset']): ?>
         <td>&nbsp;<?php echo $this->_tpl_vars['taxTerm']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%</td>
         <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
        <?php elseif ($this->_tpl_vars['priceset'] == 0): ?>
         <td>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['taxTerm']; ?>
</td>
         <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
        <?php endif; ?>
        </tr>
       <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if (isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

         </td>
        </tr>
       <?php endif; ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['formValues']['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

        </td>
       </tr>
       <?php if ($this->_tpl_vars['receive_date']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>
       <?php if ($this->_tpl_vars['formValues']['paidBy']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['formValues']['paidBy']; ?>

         </td>
        </tr>
        <?php if ($this->_tpl_vars['formValues']['check_number']): ?>
         <tr>
          <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </td>
          <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
           <?php echo $this->_tpl_vars['formValues']['check_number']; ?>

          </td>
         </tr>
        <?php endif; ?>
       <?php endif; ?>
      <?php endif; ?>
     <?php endif; ?>
    </table>
   </td>
  </tr>

  <?php if ($this->_tpl_vars['isPrimary']): ?>
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">

      <?php if ($this->_tpl_vars['billingName']): ?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </th>
       </tr>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php echo $this->_tpl_vars['billingName']; ?>
<br />
         <?php echo $this->_tpl_vars['address']; ?>

        </td>
       </tr>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['credit_card_type']): ?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </th>
       </tr>
       <tr>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo $this->_tpl_vars['credit_card_type']; ?>
<br />
         <?php echo $this->_tpl_vars['credit_card_number']; ?>

        </td>
       </tr>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

        </td>
       </tr>
      <?php endif; ?>

     </table>
    </td>
   </tr>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['customValues']): ?>
   <tr>
    <td>
     <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </th>
      </tr>
      <?php $_from = $this->_tpl_vars['customValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php echo $this->_tpl_vars['customName']; ?>

        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo $this->_tpl_vars['value']; ?>

        </td>
       </tr>
      <?php endforeach; endif; unset($_from); ?>
     </table>
    </td>
   </tr>
  <?php endif; ?>

 </table>
</center>

</body>
</html>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>