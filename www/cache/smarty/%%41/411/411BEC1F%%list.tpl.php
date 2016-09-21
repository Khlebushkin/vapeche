<?php /* Smarty version 2.6.26, created on 2016-09-11 21:06:45
         compiled from rubs/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rubs/list.tpl', 79, false),array('modifier', 'count', 'rubs/list.tpl', 127, false),)), $this); ?>
<script type="text/javascript" language="JavaScript">
$(function() {
<?php if (check_permission ( 'rubric_edit' )): ?>

	// сортировка рубрик
	$('#rubsTbody').tableSortable({
		url: 'index.php?do=rubs&action=rubssort&cp=<?php echo $this->_tpl_vars['sess']; ?>
',
		success: true
	});

	$(".AddRub").click( function(e) {
		e.preventDefault();
		var user_group = $('#add_rub #rubric_title').fieldValue();
		var title = '<?php echo $this->_config[0]['vars']['RUBRIK_NEW']; ?>
';
		var text = '<?php echo $this->_config[0]['vars']['RUBRIK_ENTER_NAME']; ?>
';
		if (user_group == ""){
			jAlert(text,title);
		}else{
			$.alerts._overlay('show');
			$("#add_rub").submit();
		}
	});

	$(".CopyRub").click( function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		var title = '<?php echo $this->_config[0]['vars']['REQUEST_COPY']; ?>
';
		var text = '<?php echo $this->_config[0]['vars']['REQUEST_PLEASE_NAME']; ?>
';
		jPrompt(text, '', title, function(b){
					if (b){
						$.alerts._overlay('show');
						window.location = href + '&cname=' + b;
					}
				}
			);
	});

	<?php endif; ?>
});
</script>

<div class="title">
	<h5><?php echo $this->_config[0]['vars']['RUBRIK_SUB_TITLE']; ?>
</h5>
</div>

<div class="widget" style="margin-top: 0px;">
	<div class="body"> <?php echo $this->_config[0]['vars']['RUBRIK_TIP']; ?>
 </div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB">
				<a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a>
			</li>
			<li><?php echo $this->_config[0]['vars']['RUBRIK_SUB_TITLE']; ?>
</li>
		</ul>
	</div>
</div>

<div class="widget first">
	<ul class="tabs">
		<li class="activeTab">
			<a href="#tab1"><?php echo $this->_config[0]['vars']['RUBRIK_ALL']; ?>
</a>
		</li>
		<?php if (check_permission ( 'rubric_edit' )): ?>
		<li class="">
			<a href="#tab2"><?php echo $this->_config[0]['vars']['RUBRIK_NEW']; ?>
</a>
		</li>
		<?php endif; ?>
	</ul>
	<div class="tab_container">
		<div id="tab1" class="tab_content" style="display: block;">
			<div class="body">
				<strong><?php echo $this->_config[0]['vars']['RUBRIK_FORMAT']; ?>
</strong><br />
				<strong>%d-%m-%Y</strong> - <?php echo $this->_config[0]['vars']['RUBRIK_FORMAT_TIME']; ?>
<br />
				<strong>%id</strong> - <?php echo $this->_config[0]['vars']['RUBRIK_FORMAT_ID']; ?>

			</div>
			<form class="mainForm" id="quickSave" method="post" action="index.php?do=rubs&cp=<?php echo $this->_tpl_vars['sess']; ?>
&sub=quicksave<?php if ($_REQUEST['page'] != ''): ?>&page=<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>">
				<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
					<col width="20">
					<col width="20">
					<col width="20">
					<col width="20">
					<col>
					<col width="120">
					<col width="100">
					<col width="40">
					<col width="30">
					<col width="40">
					<col width="20">
					<col width="20">
					<col width="20">
					<col width="20">
					<col width="20">
					<thead>
						<tr>
							<td><?php echo $this->_config[0]['vars']['RUBRIK_ID']; ?>
</td>
							<td><a href="javascript:void(0);" class="topDir link" style="cursor: help;" title="<?php echo $this->_config[0]['vars']['RUBRIK_R_SORT_TIP']; ?>
">[?]</a></td>
							<td><a href="javascript:void(0);" class="topDir link" style="cursor: help;" title="<?php echo $this->_config[0]['vars']['RUBRIK_META_GEN_TIP']; ?>
">[?]</a></td>
							<td><a href="javascript:void(0);" class="topDir link" style="cursor: help;" title="<?php echo $this->_config[0]['vars']['RUBRIK_ALIAS_HISTORY_TIP']; ?>
">[?]</a></td>
							<td><?php echo $this->_config[0]['vars']['RUBRIK_NAME']; ?>
</td>
							<td><?php echo $this->_config[0]['vars']['RUBRIK_URL_PREFIX']; ?>
</td>
							<td><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_OUT']; ?>
</td>
							<td align="center"><a href="javascript:void(0);" class="topDir icon_sprite ico_list float" style="cursor: help; display: inline-block" title="<?php echo $this->_config[0]['vars']['RUBRIK_COUNT_DOCS']; ?>
"></a></td>
							<td align="center">
								<div align="center">
									<a href="javascript:void(0);" class="topDir link" style="cursor: help;" title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCS_VI']; ?>
">[?]</a>
								</div>
							</td>
							<td align="center"><a href="javascript:void(0);" class="topDir icon_sprite ico_lines float" style="cursor: help; display: inline-block" title="<?php echo $this->_config[0]['vars']['RUBRIK_COUNT_FIELDS']; ?>
"></a></td>
							<td align="center" colspan="5"><?php echo $this->_config[0]['vars']['RUBRIK_ACTION']; ?>
</td>
						</tr>
					</thead>
					<tbody id="rubsTbody">
						<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<tr data-id="rub_<?php echo $this->_tpl_vars['rubric']->Id; ?>
">
							<td align="center">
								<?php if ($this->_tpl_vars['rubric']->rubric_description): ?>
								<a href="javascript:void(0);" class="toprightDir link" style="cursor: help;" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_description)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><strong>[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]</strong></a>
								<?php else: ?>
								<strong class="toprightDir link" title="<?php echo $this->_config[0]['vars']['RUBRIK_NAME']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_tpl_vars['rubric']->Id; ?>
</strong>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<span class="icon_sprite topDir ico_move<?php if (count($this->_tpl_vars['rubrics']) < 2): ?>_no<?php endif; ?>" title="<?php echo $this->_config[0]['vars']['RUBRIK_MOVE']; ?>
" style="cursor:move"></span>
								<?php else: ?>
									<span class="icon_sprite topDir ico_move<?php if (count($this->_tpl_vars['rubrics']) < 2): ?>_no<?php endif; ?>" title="<?php echo $this->_config[0]['vars']['RUBRIK_MOVE']; ?>
"></span>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<input type="checkbox" value="1" name="rubric_meta_gen[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" <?php if ($this->_tpl_vars['rubric']->rubric_meta_gen): ?>checked="checked"<?php endif; ?> />
								<?php else: ?>
									<input type="checkbox" <?php if ($this->_tpl_vars['rubric']->rubric_meta_gen): ?>checked="checked"<?php endif; ?> disabled="disabled" />
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<input type="checkbox" value="1" name="rubric_alias_history[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" <?php if ($this->_tpl_vars['rubric']->rubric_alias_history): ?>checked="checked"<?php endif; ?> />
								<?php else: ?>
									<input type="checkbox" <?php if ($this->_tpl_vars['rubric']->rubric_alias_history): ?>checked="checked"<?php endif; ?> disabled="disabled" />
								<?php endif; ?>
							</td>
							<td>
								<?php if (check_permission ( 'rubric_edit' )): ?>
								<div class="pr12">
									<input style="width:100%" class="mousetrap" type="text" name="rubric_title[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
								</div>
								<?php else: ?>
								<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>
								<?php endif; ?>
							</td>
							<td>
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<div class="pr12">
										<input style="width:100%" class="mousetrap" type="text" name="rubric_alias[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_alias)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
									</div>
								<?php else: ?>
									<div class="pr12">
										<input style="width:100%" class="mousetrap" type="text" name="rubric_alias[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_alias)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" disabled="disabled" />
									</div>
								<?php endif; ?>
							</td>
							<td>
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<select name="rubric_template_id[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" style="width: 300px" class="mousetrap">
										<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
											<option value="<?php echo $this->_tpl_vars['template']->Id; ?>
" <?php if ($this->_tpl_vars['template']->Id == $this->_tpl_vars['rubric']->rubric_template_id): ?>selected="selected" <?php endif; ?>/><?php echo ((is_array($_tmp=$this->_tpl_vars['template']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								<?php else: ?>
									<select name="rubric_template_id[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" style="width: 300px" disabled="disabled">
										<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
											<?php if ($this->_tpl_vars['template']->Id == $this->_tpl_vars['rubric']->rubric_template_id): ?><option value="<?php echo $this->_tpl_vars['template']->Id; ?>
" selected="selected" /><?php echo ((is_array($_tmp=$this->_tpl_vars['template']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option><?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								<?php endif; ?>
							</td>
							<td align="center"><strong class="code"><?php echo $this->_tpl_vars['rubric']->doc_count; ?>
</strong></td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<input type="checkbox" name="rubric_docs_active[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" value="1" <?php if ($this->_tpl_vars['rubric']->rubric_docs_active == 1): ?>checked="checked"<?php endif; ?>>
								<?php else: ?>
									<input type="checkbox" name="rubric_docs_active[<?php echo $this->_tpl_vars['rubric']->Id; ?>
]" value="1" <?php if ($this->_tpl_vars['rubric']->rubric_docs_active == 1): ?>checked="checked"<?php endif; ?> disabled="disabled">
								<?php endif; ?>
							</td>
							<td align="center"><strong class="code"><?php echo $this->_tpl_vars['rubric']->fld_count; ?>
</strong></td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<a class="topleftDir icon_sprite ico_edit" title="<?php echo $this->_config[0]['vars']['RUBRIK_EDIT']; ?>
" href="index.php?do=rubs&action=edit&Id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a>
								<?php else: ?>
									<span title="<?php echo $this->_config[0]['vars']['RUBRIK_NO_CHANGE1']; ?>
" class="topleftDir icon_sprite ico_edit_no"></span>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<a class="topleftDir icon_sprite ico_template" title="<?php echo $this->_config[0]['vars']['RUBRIK_EDIT_TEMPLATE']; ?>
" href="index.php?do=rubs&action=template&Id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a>
								<?php else: ?>
									<span title="<?php echo $this->_config[0]['vars']['RUBRIK_NO_CHANGE2']; ?>
" class="topleftDir icon_sprite ico_template_no"></span>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' ) && check_permission ( 'rubric_code' )): ?>
									<a class="topleftDir icon_sprite ico_attach" title="<?php echo $this->_config[0]['vars']['RUBRIK_EDIT_CODE']; ?>
" href="index.php?do=rubs&action=code&Id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a>
								<?php else: ?>
									<span title="<?php echo $this->_config[0]['vars']['RUBRIK_EDIT_CODE_NO']; ?>
" class="topleftDir icon_sprite ico_attach"></span>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if (check_permission ( 'rubric_edit' )): ?>
									<a class="topleftDir icon_sprite ico_copy" title="<?php echo $this->_config[0]['vars']['RUBRIK_MULTIPLY']; ?>
" href="javascript:void(0);" onclick="windowOpen('index.php?do=rubs&action=multi&Id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','850','500','1','pop')"></a>
								<?php else: ?>
									<span title="<?php echo $this->_config[0]['vars']['RUBRIK_NO_MULTIPLY']; ?>
" class="topleftDir icon_sprite ico_copy_no"></span>
								<?php endif; ?>
							</td>
							<td align="center">
								<?php if ($this->_tpl_vars['rubric']->Id != 1): ?>
									<?php if (check_permission ( 'rubric_edit' )): ?>
										<?php if ($this->_tpl_vars['rubric']->doc_count == 0): ?>
											<a class="topleftDir ConfirmDelete icon_sprite ico_delete" title="<?php echo $this->_config[0]['vars']['RUBRIK_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['RUBRIK_DELETE']; ?>
" name="<?php echo $this->_config[0]['vars']['RUBRIK_DELETE_CONFIRM']; ?>
" href="index.php?do=rubs&action=delete&Id=<?php echo $this->_tpl_vars['rubric']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a>
										<?php else: ?>
											<span title="<?php echo $this->_config[0]['vars']['RUBRIK_USE_DOCUMENTS']; ?>
" class="topleftDir icon_sprite ico_delete_no"></span>
										<?php endif; ?>
									<?php else: ?>
										<span title="<?php echo $this->_config[0]['vars']['RUBRIK_NO_PERMISSION']; ?>
" class="topleftDir icon_sprite ico_delete_no"></span>
									<?php endif; ?>
								<?php else: ?>
									<span class="topleftDir icon_sprite ico_delete_no"></span>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
				<?php if (check_permission ( 'rubric_edit' )): ?>
				<div class="rowElem">
					<input class="basicBtn" type="submit" value="<?php echo $this->_config[0]['vars']['RUBRIK_BUTTON_SAVE']; ?>
" />
					<?php echo $this->_config[0]['vars']['RUBRIK_OR']; ?>

					<input type="submit" class="blackBtn SaveEdit" value="<?php echo $this->_config[0]['vars']['RUBRIK_BUTTON_TPL_NEXT']; ?>
" />
				</div>
				<?php endif; ?>
			</form>
		</div>
		<?php if (check_permission ( 'rubric_edit' )): ?>
		<div id="tab2" class="tab_content" style="display: none;">
			<form id="add_rub" method="post" action="index.php?do=rubs&action=new&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="mainForm">
				<div class="rowElem">
					<label><?php echo $this->_config[0]['vars']['RUBRIK_NAME2']; ?>
</label>
					<div class="formRight">
						<input placeholder="<?php echo $this->_config[0]['vars']['RUBRIK_NAME']; ?>
" name="rubric_title" type="text" id="rubric_title" value="" style="width: 400px">
						&nbsp;
						<input type="button" class="basicBtn AddRub" value="<?php echo $this->_config[0]['vars']['RUBRIK_BUTTON_NEW']; ?>
" />
					</div>
					<div class="fix"></div>
				</div>
			</form>
		</div>
		<?php endif; ?>
	</div>
	<div class="fix"></div>
</div>


<script language="Javascript" type="text/javascript">
	var sett_options = {
		url: 'index.php?do=rubs&sub=quicksave&ajax=run&cp=<?php echo $this->_tpl_vars['sess']; ?>
',
		dataType: 'json',
		beforeSubmit: Request,
		success: Response
	}

	function Request(){
		$.alerts._overlay('show');
	}

	function Response(data){
		$.alerts._overlay('hide');
		$.jGrowl(data['message'], {
			header: data['header'],
			theme: data['theme']
		});
	}

	$(document).ready(function(){

		Mousetrap.bind(['ctrl+s', 'command+s'], function(e) {
			if (e.preventDefault) {
				e.preventDefault();
			} else {
				// internet explorer
				e.returnValue = false;
			}
			$("#quickSave").ajaxSubmit(sett_options);
			return false;
		});

		$(".SaveEdit").click(function(e){
			if (e.preventDefault) {
				e.preventDefault();
			} else {
				// internet explorer
				e.returnValue = false;
			}
			$("#quickSave").ajaxSubmit(sett_options);
			return false;
		});

	});
</script>


<?php if ($this->_tpl_vars['page_nav']): ?>
<div class="pagination">
	<ul class="pages">
		<?php echo $this->_tpl_vars['page_nav']; ?>

	</ul>
</div>
<?php endif; ?>
<br />
<br />
<br />