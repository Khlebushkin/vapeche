<?php /* Smarty version 2.6.26, created on 2016-09-07 03:45:33
         compiled from navigation/nestable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'navigation/nestable.tpl', 12, false),)), $this); ?>
	<?php if ($this->_tpl_vars['items']): ?>
	<ol class="dd-list">
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<li class="dd-item dd3-item" data-id="<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
" id="item-<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
">
			<div class="dd-handle dd3-handle"></div>
			<div class="dd3-content<?php if ($this->_tpl_vars['item']['status'] == 0): ?> red<?php endif; ?>">
				<div class="name">
					<a href="index.php?do=navigation&action=itemedit&sub=edit&navigation_item_id=<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
&pop=1" data-title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_EDIT']; ?>
" data-width="400px" data-modal="true" data-dialog="item-<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_EDIT']; ?>
" class="openDialog topDir"><?php echo $this->_tpl_vars['item']['title']; ?>
</a>
				</div>

				<div class="url">
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)) == '/'): ?>
					<a style="color: #ccc;" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="topDir icon_sprite ico_globus" target="_blank" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></a>
                 <?php else: ?>
                    <a style="color: #ccc;" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="topDir icon_sprite ico_globus" target="_blank" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alias'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></a>
                 <?php endif; ?>
				</div>

				<div class="document">
					<?php if ($this->_tpl_vars['item']['document_title']): ?>
					<a href="index.php?do=docs&action=edit&Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['document_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topDir link" original-title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['document_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a> (ID: <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['document_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)
					<?php else: ?>
					<span class="date_text dgrey">Нет связанного документа</span>
					<?php endif; ?>
				</div>

				<div class="status">
					<?php if ($this->_tpl_vars['item']['alias']): ?>
						<?php if ($this->_tpl_vars['item']['status'] == 1): ?>
						<a href="index.php?do=navigation&action=itemestatus&navigation_item_id=<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" data-status="0" class="topleftDir icon_sprite ico_ok_green changeStatus" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_ON_OFF']; ?>
"></a>
						<?php else: ?>
						<a href="index.php?do=navigation&action=itemestatus&navigation_item_id=<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" data-status="1" class="topleftDir icon_sprite ico_delete_no changeStatus" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_ON_OFF']; ?>
"></a>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['item']['status'] == 1): ?>
						<span class="topleftDir icon_sprite ico_ok_green" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_ON_OFF']; ?>
"></span>
						<?php else: ?>
						<span class="topleftDir icon_sprite ico_delete_no" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_ON_OFF']; ?>
"></span>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<div class="action">
					<a href="index.php?do=navigation&action=itemedit&sub=edit&navigation_item_id=<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
&pop=1" data-width="420px" data-height="620" data-modal="true" data-dialog="item-<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
" data-title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_EDIT']; ?>
" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_EDIT']; ?>
" class="openDialog topleftDir icon_sprite ico_edit"></a>
					<a href="index.php?do=navigation&action=itemdelete&navigation_item_id=<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topleftDir ConfirmDelete icon_sprite ico_delete" title="<?php echo $this->_config[0]['vars']['NAVI_ITEM_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['NAVI_ITEM_DELETE']; ?>
" name="<?php echo $this->_config[0]['vars']['NAVI_ITEM_DELETE_CONFIRM']; ?>
"></a>
				</div>
			</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['nestable_tpl']), 'smarty_include_vars' => array('items' => $this->_tpl_vars['item']['children'],'level' => $this->_tpl_vars['level']+1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ol>
	<?php endif; ?>