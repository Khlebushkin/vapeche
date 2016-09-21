<?php /* Smarty version 2.6.26, created on 2016-09-06 18:25:06
         compiled from rubs/nav.tpl */ ?>
<li><a <?php if ($_REQUEST['do'] == 'rubs'): ?>class="active"<?php else: ?><?php endif; ?> href="index.php?do=rubs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span><?php echo $this->_config[0]['vars']['MAIN_RUBRIKS']; ?>
</span></a></li>