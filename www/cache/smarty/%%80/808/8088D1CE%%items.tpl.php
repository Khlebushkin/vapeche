<?php /* Smarty version 2.6.26, created on 2016-09-07 03:45:33
         compiled from navigation/items.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'navigation/items.tpl', 1, false),array('modifier', 'stripslashes', 'navigation/items.tpl', 1, false),)), $this); ?>
<div class="title">
</h5>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
" title=""><?php echo $this->_config[0]['vars']['NAVI_SUB_TITLE']; ?>
</a></li>
</li>
</strong></li>
">Вернуться к списку</a>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">Редактировать шаблон</a>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
&pop=1" data-width="420" data-height="670" data-modal="true" data-dialog="item-new" data-title="Добавить пункт меню" class="openDialog button greenBtn" id="addNewItem">Добавить пункт меню</a>
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['nestable_tpl']), 'smarty_include_vars' => array('items' => $this->_tpl_vars['items'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
';
';
;
