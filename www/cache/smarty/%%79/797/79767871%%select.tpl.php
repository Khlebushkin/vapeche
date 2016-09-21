<?php /* Smarty version 2.6.26, created on 2016-09-11 21:02:05
         compiled from navigation/select.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'navigation/select.tpl', 8, false),)), $this); ?>
<?php if ($this->_tpl_vars['items']): ?>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<?php echo $this->_tpl_vars['item']['level']; ?>

		<option value="<?php echo $this->_tpl_vars['item']['navigation_item_id']; ?>
" <?php if ($this->_tpl_vars['navigation_item_selected'] == $this->_tpl_vars['item']['navigation_item_id']): ?>selected<?php endif; ?>>
			<?php if ($this->_tpl_vars['item']['level'] > 0): ?>
				<?php unset($this->_sections['section']);
$this->_sections['section']['name'] = 'section';
$this->_sections['section']['start'] = (int)0;
$this->_sections['section']['loop'] = is_array($_loop=$this->_tpl_vars['item']['level']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['section']['show'] = true;
$this->_sections['section']['max'] = $this->_sections['section']['loop'];
$this->_sections['section']['step'] = 1;
if ($this->_sections['section']['start'] < 0)
    $this->_sections['section']['start'] = max($this->_sections['section']['step'] > 0 ? 0 : -1, $this->_sections['section']['loop'] + $this->_sections['section']['start']);
else
    $this->_sections['section']['start'] = min($this->_sections['section']['start'], $this->_sections['section']['step'] > 0 ? $this->_sections['section']['loop'] : $this->_sections['section']['loop']-1);
if ($this->_sections['section']['show']) {
    $this->_sections['section']['total'] = min(ceil(($this->_sections['section']['step'] > 0 ? $this->_sections['section']['loop'] - $this->_sections['section']['start'] : $this->_sections['section']['start']+1)/abs($this->_sections['section']['step'])), $this->_sections['section']['max']);
    if ($this->_sections['section']['total'] == 0)
        $this->_sections['section']['show'] = false;
} else
    $this->_sections['section']['total'] = 0;
if ($this->_sections['section']['show']):

            for ($this->_sections['section']['index'] = $this->_sections['section']['start'], $this->_sections['section']['iteration'] = 1;
                 $this->_sections['section']['iteration'] <= $this->_sections['section']['total'];
                 $this->_sections['section']['index'] += $this->_sections['section']['step'], $this->_sections['section']['iteration']++):
$this->_sections['section']['rownum'] = $this->_sections['section']['iteration'];
$this->_sections['section']['index_prev'] = $this->_sections['section']['index'] - $this->_sections['section']['step'];
$this->_sections['section']['index_next'] = $this->_sections['section']['index'] + $this->_sections['section']['step'];
$this->_sections['section']['first']      = ($this->_sections['section']['iteration'] == 1);
$this->_sections['section']['last']       = ($this->_sections['section']['iteration'] == $this->_sections['section']['total']);
?>&mdash;&nbsp;<?php endfor; endif; ?>
			<?php endif; ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</option>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['select_tpl']), 'smarty_include_vars' => array('items' => $this->_tpl_vars['item']['children'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>