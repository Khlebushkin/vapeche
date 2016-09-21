<?php /* Smarty version 2.6.26, created on 2016-09-06 18:25:06
         compiled from documents/nav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'documents/nav.tpl', 8, false),)), $this); ?>
<li>
	<a <?php if ($_REQUEST['do'] == 'docs'): ?>class="active"<?php endif; ?>href="index.php?do=docs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span><?php echo $this->_config[0]['vars']['MAIN_NAVI_DOCUMENTS']; ?>
</span></a>
	<?php if ($_REQUEST['do'] == 'docs'): ?>
	<ul class="sub" style="display: block; ">
	<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
		<?php if ($this->_tpl_vars['rubric']->Show == 1 && $this->_tpl_vars['rubric']->rubric_docs_active == 1): ?>
			<li <?php if ($_REQUEST['do'] == 'docs' && $this->_tpl_vars['rubric']->Id == $_REQUEST['rubric_id']): ?>class="active"<?php endif; ?>>
				<a href="index.php?do=docs&rubric_id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
				<a class="numberRight rightDir" href="index.php?&do=docs&action=new&rubric_id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" title="<?php echo $this->_config[0]['vars']['DOC_BUTTON_ADD_DOCUMENT']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/add2.png" alt="" /></a>
			</li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php endif; ?>
</li>