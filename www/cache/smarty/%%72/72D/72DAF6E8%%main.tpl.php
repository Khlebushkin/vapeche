<?php /* Smarty version 2.6.26, created on 2016-09-07 03:45:33
         compiled from main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'main.tpl', 8, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title><?php echo $this->_config[0]['vars']['MAIN_PAGE_TITLE']; ?>
 -  (<?php echo ((is_array($_tmp=$_SESSION['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)</title>

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
/css/main.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/data_table.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/nestable.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/jquery-ui_custom.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/css/color_<?php echo @DEFAULT_THEME_FOLDER_COLOR; ?>
.css" rel="stylesheet" type="text/css" media="screen" />

	<!-- JS files -->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'scripts.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- JS Scripts -->
	<script>
		var ave_path = "<?php echo $this->_tpl_vars['ABS_PATH']; ?>
";
		var ave_theme = "<?php echo @DEFAULT_THEME_FOLDER; ?>
";
		var ave_admintpl = "<?php echo $this->_tpl_vars['tpl_dir']; ?>
";
	</script>

	<script type="text/javascript" language="JavaScript">
	$(document).ready(function(){

		<?php if (@ADMIN_MENU): ?>
			$("#menu").sticky({topSpacing:56});
		<?php endif; ?>

		<?php if (check_permission ( 'group_edit' )): ?>
		$(".ulAddGroup").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_GROUP']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_GROUP_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=groups&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&user_group_name=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_GROUP']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'user_edit' )): ?>
		$(".ulAddUser").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_USER']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_USER_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=user&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&user_name=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_USER']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'navigation_edit' )): ?>
		$(".ulAddNav").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_NAV']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_NAV_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=navigation&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&NaviName=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_NAV']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'template_edit' )): ?>
		$(".ulAddTempl").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_TEMPL']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_TEMPL_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=templates&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&TempName=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_TEMPL']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'request_edit' )): ?>
		$(".ulAddRequest").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_REQUEST']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_REQUEST_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=request&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&request_title_new=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_QUERY']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'rubric_edit' )): ?>
		$(".ulAddRub").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_RUB']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_RUB_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=rubs&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&rubric_title=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_RUB']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

		<?php if (check_permission ( 'sysblocks_edit' )): ?>
		$(".ulAddBlock").click( function(e) {
			e.preventDefault();
			var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_BLOCK']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['MAIN_ADD_NEW_BLOCK_NAME']; ?>
';
			jPrompt(text, '', title, function(b){
						if (b){
							$.alerts._overlay('hide');
							$.alerts._overlay('show');
							window.location = ave_path+'admin/index.php?do=sysblocks&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
'+ '&sysblock_name=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_BLOCK']; ?>
", {theme: 'error'});
						}
					}
				);
		});
		<?php endif; ?>

	});
	</script>

</head>

<body>

<div id="leftNav_show">
	<a href="javascript:void(0);" id="toggle-LeftMenu"><span class="rightDir <?php if ($_COOKIE['LeftMenu'] != 'hidden'): ?>close<?php endif; ?>" title="<?php echo $this->_config[0]['vars']['MAIN_SHOWHIDE']; ?>
"></span></a>
</div>

<!-- Top Menu -->
<div id="topNav">
	<div class="fixed">
		<div class="wrapper">
			<div class="welcome">
				<?php if ($this->_tpl_vars['user_avatar']): ?>
					<img src="<?php echo $this->_tpl_vars['user_avatar']; ?>
" class="avatar" alt="<?php echo ((is_array($_tmp=$_SESSION['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php else: ?>
					<img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/userPic.png" class="avatar" alt="" />
				<?php endif; ?>
				<span><?php echo $this->_config[0]['vars']['MAIN_USER_ONLINE']; ?>
 <strong><?php echo ((is_array($_tmp=$_SESSION['user_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong></span>
			</div>
			<div class="userNav">
				<ul>
					<?php if (check_permission ( 'documents_edit' ) || check_permission ( 'rubric_edit' ) || check_permission ( 'request_edit' ) || check_permission ( 'sysblocks_edit' ) || check_permission ( 'template_edit' ) || check_permission ( 'navigation_edit' ) || check_permission ( 'user_edit' ) || check_permission ( 'group_edit' )): ?>
					<li class="dropdown"><a title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/add.png" alt="" /><span>Добавить</span></a>
						<ul>
							 <?php if (check_permission ( 'documents_edit' )): ?><li><a onclick="windowOpen('index.php?do=docs&action=add_new&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','750','500','1')" href="javascript:void(0);"><?php echo $this->_config[0]['vars']['MAIN_ADD_DOC']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'rubric_edit' )): ?><li><a class="ulAddRub" href="index.php?do=rubs&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_RUB']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'request_edit' )): ?><li><a class="ulAddRequest" href="index.php?do=request&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_REQ']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'sysblocks_edit' )): ?><li><a class="ulAddBlock" href="index.php?do=sysblocks&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_SYS']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'template_edit' )): ?><li><a class="ulAddTempl" href="index.php?do=templates&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_TEM']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'navigation_edit' )): ?><li><a class="ulAddNav" href="index.php?do=navigation&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_NAV']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'user_edit' )): ?><li><a class="ulAddUser" href="index.php?do=user&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_USR']; ?>
</a></li><?php endif; ?>
							 <?php if (check_permission ( 'group_edit' )): ?><li><a class="ulAddGroup" href="index.php?do=groups&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_ADD_GRP']; ?>
</a></li><?php endif; ?>
						</ul>
					</li>
					<?php endif; ?>

					<li class="dropdown dd_page" <?php if ($_COOKIE['LeftMenu'] == 'visible'): ?>style="display: none;"<?php endif; ?>><a title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/tasks.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_BRANCHES']; ?>
</span></a>
						<ul class="menu_page">
							 <?php echo $this->_tpl_vars['navi_top']; ?>

						</ul>
					</li>

					<?php if (check_permission ( 'modules_view' )): ?>
					<?php if ($this->_tpl_vars['modules']): ?>
					<li class="dropdown"><a title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/subInbox.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LINK_MODULES_H']; ?>
</span></a>
						<?php if ($this->_tpl_vars['modules'] && check_permission ( 'modules_view' )): ?>
						<ul>
								<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modul']):
?>
										<li><a href="index.php?do=modules&action=modedit&mod=<?php echo $this->_tpl_vars['modul']->ModuleSysName; ?>
&moduleaction=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_tpl_vars['modul']->ModuleName; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
						</ul>
						<?php endif; ?>
					</li>
					<?php endif; ?>
					<?php endif; ?>
					<?php if (check_permission ( 'gen_settings' ) || check_permission ( 'gen_settings_more' ) || check_permission ( 'dbactions' ) || check_permission ( 'gen_settings_countries' ) || check_permission ( 'gen_settings_languages' )): ?>
					<li class="dropdown"><a title=""><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/settings.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LINK_SETTINGS_H']; ?>
</span></a>
						<ul>
							<?php if (check_permission ( 'gen_settings' )): ?><li><a href="index.php?do=settings&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_SETTINGS_EDIT_1']; ?>
</a></li><?php endif; ?>
							<?php if (check_permission ( 'gen_settings_more' )): ?><li><a href="index.php?do=settings&sub=case&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_SETTINGS_EDIT_2']; ?>
</a></li><?php endif; ?>
							<?php if (check_permission ( 'gen_settings_countries' )): ?><li><a href="index.php?do=settings&sub=countries&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_SETTINGS_EDIT_3']; ?>
</a></li><?php endif; ?>
							<?php if (check_permission ( 'gen_settings_languages' )): ?><li><a href="index.php?do=settings&sub=language&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_LINK_LANG']; ?>
</a></li><?php endif; ?>
							<?php if (check_permission ( 'db_actions' )): ?><li><a href="index.php?do=dbsettings&action=dump_top&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_SETTINGS_EDIT_4']; ?>
</a></li><?php endif; ?>
						</ul>
					</li>
					<?php endif; ?>
					<?php if (check_permission ( 'cache_clear' )): ?><li><a href="javascript:void(0);" class="clearCache" title="<?php echo $this->_config[0]['vars']['MAIN_STAT_CLEAR_CACHE']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/subTrash.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_STAT_CLEAR_CACHE']; ?>
</span></a></li><?php endif; ?>
					<li>
						<a href="../" title="<?php echo $this->_config[0]['vars']['MAIN_LINK_SITE']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/preview.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_LINK_SITE']; ?>
</span></a>
					</li>
					<li><a href="admin.php?do=logout" class="ConfirmLogOut" title="<?php echo $this->_config[0]['vars']['MAIN_BUTTON_LOGOUT']; ?>
"><img src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/images/icons/logout.png" alt="" /><span><?php echo $this->_config[0]['vars']['MAIN_BUTTON_LOGOUT']; ?>
</span></a></li>
				</ul>
			</div>
			<div class="fix"></div>
		</div>
	</div>
</div>

<!-- Header -->
<div id="header" class="wrapper">
	<!-- <div class="logo"><a href="index.php" class="box"></a></div> -->
	<div class="fix"></div>
</div>

<!-- Wrapper -->
<div class="wrapper">

	<!-- Left navigation -->
	<div class="leftNav <?php if ($_COOKIE['LeftMenu'] == 'hidden'): ?>hidden<?php endif; ?>">
		
		<ul id="menu">
			<li><a href="index.php" <?php if ($_REQUEST['do'] == ''): ?>class="active collapse-close"<?php endif; ?>><span><?php echo $this->_config[0]['vars']['MAIN_LINK_HOME']; ?>
</span></a></li>
			<?php echo $this->_tpl_vars['navi']; ?>

		</ul>
	</div>

	<!-- Content -->
	<div class="content" id="contentPage">
		<?php echo $this->_tpl_vars['content']; ?>

	</div>

	<div class="fix"></div>
</div>


<!-- Footer -->
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

<script type="text/javascript" src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/lang/<?php echo $_SESSION['admin_language']; ?>
/scripts.js"></script>
<script src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/js/main.js" type="text/javascript"></script>

</body>
</html>