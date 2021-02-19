<?php /* Smarty version 2.6.31, created on 2021-02-18 01:14:14
         compiled from CRM/Contact/Form/Search/Criteria/Fields/sort_name.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Search/Criteria/Fields/sort_name.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Search/Criteria/Fields/sort_name.tpl', 2, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="sortnameselect">
  <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Complete OR Partial Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <span class="description">(<a href="#" id='searchbyindivflds'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>search by individual name fields<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>)</span></label><br />
  <?php echo $this->_tpl_vars['form']['sort_name']['html']; ?>

</div>
<div id="indivfldselect">
  <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>First/Last Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><span class="description"> (<a href="#" id='searchbysortname'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>search by complete or partial name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>)</span></label><br />
  <?php echo $this->_tpl_vars['form']['first_name']['html']; ?>
 <?php echo $this->_tpl_vars['form']['last_name']['html']; ?>

</div>

<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      function showIndivFldsSearch() {
        $(\'#sortnameselect\').css(\'visibility\', \'hidden\').css(\'position\',\'absolute\');
        $(\'#indivfldselect\').css(\'visibility\', \'visible\').css(\'position\',\'static\');
        $(\'#sort_name\').val(\'\');
        $(\'#first_name\').removeClass(\'big\').addClass(\'eight\');
        $(\'#last_name\').removeClass(\'big\').addClass(\'eight\');
        return false;
      }
      function showSortNameSearch() {
        $(\'#indivfldselect\').css(\'visibility\', \'hidden\').css(\'position\',\'absolute\');
        $(\'#sortnameselect\').css(\'visibility\', \'visible\').css(\'position\',\'static\');
        $(\'#first_name\').val(\'\');
        $(\'#last_name\').val(\'\');
        return false;
      }
      $(\'#searchbyindivflds\').click(showIndivFldsSearch);
      $(\'#searchbysortname\').click(showSortNameSearch);

      if ($(\'#first_name\').val() || $(\'#last_name\').val()) {
        showIndivFldsSearch();
      }
      else {
        showSortNameSearch();
      }
    });
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>