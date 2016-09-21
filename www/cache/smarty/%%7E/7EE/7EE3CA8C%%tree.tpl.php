<?php /* Smarty version 2.6.26, created on 2016-09-11 21:02:05
         compiled from navigation/tree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'navigation/tree.tpl', 8, false),)), $this); ?>
<?php if ($this->_tpl_vars['document']->document_linked_navi_id): ?>
	<?php $this->assign('navigation_item_selected', $this->_tpl_vars['document']->document_linked_navi_id); ?>
<?php endif; ?>

<select name="document_linked_navi_id" id="document_linked_navi_id" style="width: 450px;">
	<option value="0">&nbsp;</option>
	<?php $_from = $this->_tpl_vars['navigations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['navigation']):
?>
		<optgroup label="(<?php echo $this->_tpl_vars['navigation']->navigation_id; ?>
) <?php echo ((is_array($_tmp=$this->_tpl_vars['navigation']->title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['select_tpl']), 'smarty_include_vars' => array('items' => $this->_tpl_vars['navigation']->navigation_items)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</optgroup>
	<?php endforeach; endif; unset($_from); ?>
</select>