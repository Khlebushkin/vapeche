<?php /* Smarty version 2.6.26, created on 2016-09-11 20:58:16
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login.tpl', 69, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title><?php echo $this->_config[0]['vars']['MAIN_LOGIN_TEXT']; ?>
</title>

	<meta name="robots" content="noindex, nofollow">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="generator" content="Notepad" >
	<meta name="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">

	<!-- Favicon -->
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/admin.favicon.ico">
	<link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/admin.favicon.ico">

	<!-- CSS Files -->
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/login.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/color_<?php echo @DEFAULT_THEME_FOLDER_COLOR; ?>
.css" rel="stylesheet" type="text/css" media="screen" />

	<!-- JS files -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'login_scripts.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/js/login.js" type="text/javascript"></script>

</head>

<body>
	<div id="topNav">
		<div class="fixed">
			<div class="wrapper">
				<div class="backTo">
					<a href="../" title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/mainWebsite.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LOGIN_BACK_SITE']; ?>
</span></a>
				</div>
				<div class="userNav">
					<ul>
						<li>
							<a href="#" title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/register.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LOGIN_REGISTER']; ?>
</span></a>
						</li>
						<li>
							<a href="#" title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/contact.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LOGIN_LOST']; ?>
</span></a>
						</li>
						<li>
							<a href="#" title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/help.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LOGIN_HELP']; ?>
</span></a>
						</li>
					</ul>
				</div>
				<div class="fix">
				</div>
			</div>
		</div>
	</div>

	<div class="loginWrapper">
		<div class="loginLogo">
			<img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/loginLogo.png" alt="" />
		</div>
		<div class="loginPanel">
			<div class="head">
				<h5><?php echo $this->_config[0]['vars']['MAIN_LOGIN_INTRO']; ?>
</h5>
			</div>
			<form method="post" action="admin.php" class="mainForm">
				<input type="hidden" name="action" value="login">
				<fieldset>
					<div class="loginRow">
						<label for="user_login"><?php echo $this->_config[0]['vars']['MAIN_LOGIN_NAME']; ?>
</label>
						<div class="loginInput">
							<input type="text" name="user_login" value="<?php echo ((is_array($_tmp=$_REQUEST['user_login'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="loginEmail">
						</div>
						<div class="fix">
						</div>
					</div>
					<div class="loginRow">
						<label for="user_pass"><?php echo $this->_config[0]['vars']['MAIN_LOGIN_PASSWORD']; ?>
</label>
						<div class="loginInput">
							<input type="password" name="user_pass" class="loginPassword">
						</div>
						<div class="fix">
						</div>
					</div>
					<?php if ($this->_tpl_vars['captcha']): ?>
					<div class="loginRow">
						<label for="req2">Код:</label>
						<div class="loginInput">
							<span id="captcha"><img src="/inc/captcha.php" alt="" width="120" height="60" border="0" /></span>
						</div>
						<div class="fix">
						</div>
					</div>
					<div class="loginRow">
						<label for="securecode"><?php echo $this->_config[0]['vars']['MAIN_LOGIN_CAPTCHA']; ?>
</label>
						<div class="loginInput">
							<input name="securecode" type="text" id="securecode"	class="field" autocomplete="off"/>
						</div>
						<div class="fix">
						</div>
					</div>
					<?php endif; ?>
					<div class="loginRow">
						<div class="rememberMe">
							<input type="checkbox" id="SaveLogin" name="SaveLogin" value="1" />
							<label style="cursor: pointer; "><?php echo $this->_config[0]['vars']['MAIN_LOGIN_REMEMBER']; ?>
</label>
						</div>
						<input type="submit" value="<?php echo $this->_config[0]['vars']['MAIN_LOGIN_BUTTON']; ?>
" class="basicBtn submitForm" style="margin-bottom:14px">
					</div>
				</fieldset>
			</form>
		</div>
		<?php if ($this->_tpl_vars['error']): ?>
		<div class="loginRowError">
			<ul class="messages">
				<li class="highlight red"><?php echo $this->_tpl_vars['error']; ?>
</li>
			</ul>
		</div>
		<?php endif; ?>
	</div>

	<div id="footer">
		<div class="wrapper">
			<span class="floatleft"><?php echo $this->_config[0]['vars']['oficial_site']; ?>
: <?php echo @APP_INFO; ?>
</span>
			<span class="floatleft ml20"><?php echo $this->_config[0]['vars']['support']; ?>
: <a href="mailto:support@ave-cms.ru">support@ave-cms.ru</a></span>
			<span class="floatright"><?php echo @APP_NAME; ?>
 v<?php echo @APP_VERSION; ?>
</span>
		</div>
	</div>
</body>
</html>