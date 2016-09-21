<?php /* Smarty version 2.6.26, created on 2016-09-06 18:25:07
         compiled from request/nav.tpl */ ?>
<li><a <?php if ($_REQUEST['do'] == 'request'): ?>class="active"<?php else: ?><?php endif; ?> href="index.php?do=request&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span><?php echo $this->_config[0]['vars']['MAIN_QUERIES']; ?>
</span></a></li>