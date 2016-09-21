<?php /* Smarty version 2.6.26, created on 2016-09-06 18:25:07
         compiled from modules/nav.tpl */ ?>
<li><a <?php if ($_REQUEST['do'] == 'modules'): ?>class="active"<?php else: ?><?php endif; ?> href="index.php?do=modules&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span><?php echo $this->_config[0]['vars']['MAIN_NAVI_MODULES']; ?>
</span></a></li>