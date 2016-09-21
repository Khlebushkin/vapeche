<?php /* Smarty version 2.6.26, created on 2016-09-11 21:01:55
         compiled from templates/templates.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'templates/templates.tpl', 84, false),array('modifier', 'date_format', 'templates/templates.tpl', 86, false),array('modifier', 'pretty_date', 'templates/templates.tpl', 86, false),array('modifier', 'format_size', 'templates/templates.tpl', 160, false),)), $this); ?>
<script type="text/javascript" language="JavaScript">
$(document).ready(function(){

	<?php if (check_permission ( 'template_edit' )): ?>
		$(".AddTempl").click( function(e) {
			e.preventDefault();
			var user_group = $('#add_templ #TempName').fieldValue();
			var title = '<?php echo $this->_config[0]['vars']['TEMPLATES_TITLE_NEW']; ?>
';
			var text = '<?php echo $this->_config[0]['vars']['TEMPLATES_TIP3']; ?>
';
			if (user_group == ""){
				jAlert(text,title);
			}else{
				$.alerts._overlay('show');
				$("#add_templ").submit();
			}
		});

	$(".CopyTempl").click( function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		var title = '<?php echo $this->_config[0]['vars']['TEMPLATES_COPY']; ?>
';
		var text = '<?php echo $this->_config[0]['vars']['TEMPLATES_TIP3']; ?>
';
		jPrompt(text, '', title, function(b){
					if (b){
						$.alerts._overlay('show');
						window.location = href + '&template_title=' + b;
					}
				}
			);
	});
	<?php endif; ?>

});
</script>

<div class="title"><h5><?php echo $this->_config[0]['vars']['TEMPLATES_SUB_TITLE']; ?>
</h5></div>

<div class="widget" style="margin-top: 0px;">
	<div class="body">
		<?php echo $this->_config[0]['vars']['TEMPLATES_TIP1']; ?>

	</div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><?php echo $this->_config[0]['vars']['TEMPLATES_SUB_TITLE']; ?>
</li>
			<li><?php echo $this->_config[0]['vars']['TEMPLATES_FOLDER']; ?>
 <strong class="code">/templates/<?php echo @DEFAULT_THEME_FOLDER; ?>
</strong></li>
		</ul>
	</div>
</div>

<div class="widget first">
	<ul class="tabs">
		<li class="activeTab"><a href="#tab1"><?php echo $this->_config[0]['vars']['TEMPLATES_ALL']; ?>
</a></li>
		<?php if (check_permission ( 'template_edit' )): ?>
		<li class=""><a href="#tab2"><?php echo $this->_config[0]['vars']['TEMPLATES_TITLE_NEW']; ?>
</a></li>
		<li class=""><a href="#tab3"><?php echo $this->_config[0]['vars']['TEMPLATES_CSS_FILES']; ?>
</a></li>
		<li class=""><a href="#tab4"><?php echo $this->_config[0]['vars']['TEMPLATES_JS_FILES']; ?>
</a></li>
		<?php endif; ?>
		<?php if (check_permission ( 'mediapool_finder' )): ?>
		<li class=""><a href="#tab5"><?php echo $this->_config[0]['vars']['TEMPLATES_FILES']; ?>
</a></li>
		<?php endif; ?>
	</ul>

	<div class="tab_container">
		<div id="tab1" class="tab_content" style="display: block;">

			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<thead>
					<tr>
						<td width="40"><?php echo $this->_config[0]['vars']['TEMPLATES_ID']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['TEMPLATES_NAME']; ?>
</td>
						<td width="200"><?php echo $this->_config[0]['vars']['TEMPLATES_AUTHOR']; ?>
</td>
						<td width="150"><?php echo $this->_config[0]['vars']['TEMPLATES_DATE']; ?>
</td>
						<td width="50" colspan="3"><?php echo $this->_config[0]['vars']['TEMPLATES_ACTION']; ?>
</td>
					</tr>
				</thead>
				<tbody>
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tpl']):
?>
		<tr>
			<td width="10" align="center"><?php echo $this->_tpl_vars['tpl']->Id; ?>
</td>
			<td><strong><?php if (check_permission ( 'template_edit' )): ?><a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT']; ?>
" href="index.php?do=templates&action=edit&Id=<?php echo $this->_tpl_vars['tpl']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topDir link"><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></strong></td>
			<td align="center"><?php echo $this->_tpl_vars['tpl']->template_author; ?>
</td>
			<td align="center"><span class="date_text dgrey"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl']->template_created)) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>
</span></td>
			<td nowrap="nowrap" width="1%" align="center">
				<?php if (check_permission ( 'template_edit' )): ?>
					<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT']; ?>
" href="index.php?do=templates&action=edit&Id=<?php echo $this->_tpl_vars['tpl']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topDir icon_sprite ico_edit"></a>
				<?php else: ?>
					<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_NO_CHANGE']; ?>
" href="javascript:void(0);" class="topleftDir icon_sprite ico_edit_no"></a>
				<?php endif; ?>
			</td>
			<td nowrap="nowrap" width="1%" align="center">
				<?php if (check_permission ( 'template_edit' )): ?>
					<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_COPY']; ?>
" href="index.php?do=templates&action=multi&sub=save&Id=<?php echo $this->_tpl_vars['tpl']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topleftDir CopyTempl icon_sprite ico_copy"></a>
				<?php else: ?>
					<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_NO_COPY']; ?>
" href="javascript:void(0);" class="topleftDir icon_sprite ico_copy_no"></a>
				<?php endif; ?>
			</td>
			<td nowrap="nowrap" width="1%" align="center">
				<?php if ($this->_tpl_vars['tpl']->Id == 1): ?>
				   <span title="" class="topleftDir icon_sprite ico_delete_no"></span>
				<?php else: ?>
					<?php if ($this->_tpl_vars['tpl']->can_deleted == 1): ?>
						<?php if (check_permission ( 'template_edit' )): ?>
							<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['TEMPLATES_DELETE']; ?>
" name="<?php echo $this->_config[0]['vars']['TEMPLATES_DELETE_CONF']; ?>
" href="index.php?do=templates&action=delete&Id=<?php echo $this->_tpl_vars['tpl']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topleftDir ConfirmDelete icon_sprite ico_delete"></a>
						<?php else: ?>
							<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_NO_DELETE3']; ?>
" href="javascript:void(0);" class="topleftDir icon_sprite ico_delete_no"></a>
						<?php endif; ?>
					<?php else: ?>
						<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_NO_DELETE2']; ?>
" href="javascript:void(0);" class="topleftDir icon_sprite ico_delete_no"></a>
					<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
				</tbody>
			</table>
		</div>

		<?php if (check_permission ( 'template_edit' )): ?>
		<div id="tab2" class="tab_content" style="display:none;">

			<form id="add_templ" method="post" action="index.php?do=templates&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="mainForm">
			<div class="rowElem">
				<label><?php echo $this->_config[0]['vars']['TEMPLATES_NAME3']; ?>
</label>
				<div class="formRight"><input placeholder="<?php echo $this->_config[0]['vars']['TEMPLATES_NAME']; ?>
" name="template_title" type="text" id="TempName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['g_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="width: 400px">
				&nbsp;<input type="button" class="basicBtn AddTempl" value="<?php echo $this->_config[0]['vars']['TEMPLATES_BUTTON_ADD']; ?>
" />
				</div>
				<div class="fix"></div>
			</div>
			</form>
		</div>
		<?php endif; ?>

		<?php if (check_permission ( 'template_edit' )): ?>
		<div id="tab3" class="tab_content" style="display:none;">
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
			<col />
			<col width="100"/>
			<col width="60"/>
			<thead>
				<tr>
					<td><?php echo $this->_config[0]['vars']['TEMPLATES_FILE_NAME']; ?>
</td>
					<td><?php echo $this->_config[0]['vars']['TEMPLATES_FILE_SIZE']; ?>
</td>
					<td nowrap="nowrap" colspan="2" align="center"><?php echo $this->_config[0]['vars']['TEMPLATES_ACTION']; ?>
</td>
				</tr>
			</thead>
			<tbody>
				<?php if ($this->_tpl_vars['css_files']): ?>
			<?php $_from = $this->_tpl_vars['css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['file']):
        $this->_foreach['outer']['iteration']++;
?>
				<?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr>
					<td>
						<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT_FILE']; ?>
" href="index.php?do=templates&action=edit_css&sub=edit&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="toprightDir link"><strong>/templates/<?php echo @DEFAULT_THEME_FOLDER; ?>
/css/<?php echo $this->_tpl_vars['item']['filename']; ?>
</strong></a>
					</td>

					<td class="aligncenter">
						<strong class="code"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['filesize'])) ? $this->_run_mod_handler('format_size', true, $_tmp) : format_size($_tmp)); ?>
</strong>
					</td>

					<td nowrap="nowrap" width="1%" align="center">
						<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT_FILE']; ?>
" href="index.php?do=templates&action=edit_css&sub=edit&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topDir icon_sprite ico_edit"></a>
					</td>

					<td nowrap="nowrap" width="1%" align="center">
						<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_DEL_FILE']; ?>
" dir="<?php echo $this->_config[0]['vars']['TEMPLATES_DEL_FILE']; ?>
" name="<?php echo $this->_config[0]['vars']['TEMPLATES_DELETE_CONF']; ?>
" href="index.php?do=templates&action=edit_css&sub=delete&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topleftDir ConfirmDelete icon_sprite ico_delete"></a>
					</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
				<?php else: ?>
				<tr>
					<td colspan="3">
						<ul class="messages">
							<li class="highlight yellow"><?php echo $this->_config[0]['vars']['TEMPLATES_NO_ITEMS']; ?>
</li>
						</ul>
					</td>
				</tr>
				<?php endif; ?>

			</tbody>
		</table>
		</div>

		<div id="tab4" class="tab_content" style="display:none;">
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
			<col />
			<col width="100"/>
			<col width="60"/>
			<thead>
			<tr>
				<td><?php echo $this->_config[0]['vars']['TEMPLATES_FILE_NAME']; ?>
</td>
				<td><?php echo $this->_config[0]['vars']['TEMPLATES_FILE_SIZE']; ?>
</td>
				<td nowrap="nowrap" colspan="2" align="center"><?php echo $this->_config[0]['vars']['TEMPLATES_ACTION']; ?>
</td>
			</tr>
			</thead>
			<?php if (check_permission ( 'template_edit' )): ?>
			<?php if ($this->_tpl_vars['js_files']): ?>
				<?php $_from = $this->_tpl_vars['js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['file']):
        $this->_foreach['outer']['iteration']++;
?>
					<?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
						<tr>
							<td>
								<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT_FILE']; ?>
" href="index.php?do=templates&action=edit_js&sub=edit&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="toprightDir link"><strong>/templates/<?php echo @DEFAULT_THEME_FOLDER; ?>
/js/<?php echo $this->_tpl_vars['item']['filename']; ?>
</strong></a>
							</td>

							<td class="aligncenter">
								<strong class="code"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['filesize'])) ? $this->_run_mod_handler('format_size', true, $_tmp) : format_size($_tmp)); ?>
</strong>
							</td>

							<td nowrap="nowrap" width="1%" align="center">
								<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_EDIT_FILE']; ?>
" href="index.php?do=templates&action=edit_js&sub=edit&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topDir icon_sprite ico_edit"></a>
							</td>

							<td nowrap="nowrap" width="1%" align="center">
								<a title="<?php echo $this->_config[0]['vars']['TEMPLATES_DEL_FILE']; ?>
" dir="<?php echo $this->_config[0]['vars']['TEMPLATES_DEL_FILE']; ?>
" name="<?php echo $this->_config[0]['vars']['TEMPLATES_DELETE_CONF']; ?>
" href="index.php?do=templates&action=edit_js&sub=delete&name_file=<?php echo $this->_tpl_vars['item']['filename']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="topleftDir ConfirmDelete icon_sprite ico_delete"></a>
							</td>
						</tr>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php else: ?>
			<tr>
				<td colspan="3">
					<ul class="messages">
						<li class="highlight yellow"><?php echo $this->_config[0]['vars']['TEMPLATES_NO_ITEMS']; ?>
</li>
					</ul>
				</td>
			</tr>
			<?php endif; ?>
			<?php endif; ?>
		</table>
		</div>
		<?php endif; ?>

		<?php if (check_permission ( 'mediapool_finder' )): ?>
		<div id="tab5" class="tab_content" style="display:none;">
			<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/css/elfinder.full.css" type="text/css" media="screen" charset="utf-8" />
			<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/css/theme.css" type="text/css" media="screen" charset="utf-8" />
			<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/js/elfinder.full.js" type="text/javascript" charset="utf-8"></script>
			<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/js/i18n/elfinder.ru.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/js/filemanager_template.js"></script>

			<div id="finder">finder</div>
		</div>
		<?php endif; ?>

	</div>

<div class="fix"></div>
</div>



	<?php if ($this->_tpl_vars['page_nav']): ?>
		<div class="pagination">
		<ul class="pages">
			<?php echo $this->_tpl_vars['page_nav']; ?>

		</ul>
		</div>
	<?php endif; ?>