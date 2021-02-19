<?php /* Smarty version 2.6.31, created on 2021-02-18 01:14:14
         compiled from CRM/Contact/Form/Search/Intro.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Search/Intro.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Search/Intro.tpl', 16, false),array('function', 'help', 'CRM/Contact/Form/Search/Intro.tpl', 17, false),array('function', 'crmURL', 'CRM/Contact/Form/Search/Intro.tpl', 22, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['context'] == 'smog'): ?>
    <?php if ($this->_tpl_vars['permissionEditSmartGroup'] && ! empty ( $this->_tpl_vars['editSmartGroupURL'] )): ?>
      <div class="crm-submit-buttons">
        <a href="<?php echo $this->_tpl_vars['editSmartGroupURL']; ?>
" class="button no-popup"><span><i class="crm-i fa-pencil" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Smart Group Search Criteria for %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
        <?php echo smarty_function_help(array('id' => "id-edit-smartGroup"), $this);?>

      </div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['permissionedForGroup']): ?>
    <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('q' => "context=amtg&amtgID=".($this->_tpl_vars['group']['id'])."&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('addMembersURL', ob_get_contents());ob_end_clean(); ?>
    <div class="crm-submit-buttons">
      <a href="<?php echo $this->_tpl_vars['addMembersURL']; ?>
" class="button no-popup"><span><i class="crm-i fa-user-plus" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['group']['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Contacts to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
      <?php if ($this->_tpl_vars['ssID']): ?><?php echo smarty_function_help(array('id' => "id-add-to-smartGroup"), $this);?>
<?php endif; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>