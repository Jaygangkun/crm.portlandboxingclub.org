<?php /* Smarty version 2.6.31, created on 2021-02-18 00:19:41
         compiled from string:%7Bstrip%7D%7Bif+%24receiptType+EQ+%27membership+signup%27%7D%0A%7Bts%7DMembership+Confirmation+and+Receipt%7B/ts%7D%0A%7Belseif+%24receiptType+EQ+%27membership+renewal%27%7D%0A%7Bts%7DMembership+Renewal+Confirmation+and+Receipt%7B/ts%7D%0A%7B/if%7D+-+Eileen+Foley%0A%7B/strip%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:{strip}{if $receiptType EQ \'membership signup\'}
{ts}Membership Confirmation and Receipt{/ts}
{elseif $receiptType EQ \'membership renewal\'}
{ts}Membership Renewal Confirmation and Receipt{/ts}
{/if} - Eileen Foley
{/strip}', 1, false),array('block', 'ts', 'string:{strip}{if $receiptType EQ \'membership signup\'}
{ts}Membership Confirmation and Receipt{/ts}
{elseif $receiptType EQ \'membership renewal\'}
{ts}Membership Renewal Confirmation and Receipt{/ts}
{/if} - Eileen Foley
{/strip}', 2, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['receiptType'] == 'membership signup'): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Membership Confirmation and Receipt'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['receiptType'] == 'membership renewal'): ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Membership Renewal Confirmation and Receipt'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo ' - Eileen Foley'; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>