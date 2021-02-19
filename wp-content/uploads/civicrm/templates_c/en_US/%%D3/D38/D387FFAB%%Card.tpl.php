<?php /* Smarty version 2.6.31, created on 2021-02-18 00:18:23
         compiled from CRM/Core/Payment/Stripe/Card.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Payment/Stripe/Card.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $(document).ready(function() {
      if (typeof CRM.vars.stripe === \'undefined\') {
        var stripe = {'; ?>
<?php $_from = $this->_tpl_vars['stripeJSVars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['arrayKey'] => $this->_tpl_vars['arrayValue']):
?><?php echo $this->_tpl_vars['arrayKey']; ?>
:'<?php echo $this->_tpl_vars['arrayValue']; ?>
',<?php endforeach; endif; unset($_from); ?><?php echo '};
        CRM.vars.stripe = stripe;
      }
    });
  });
</script>
'; ?>


<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => 'com.drastikbydesign.stripe')); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div id="card-element"></div>
<div id="card-errors" role="alert" class="crm-error alert alert-danger"></div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>