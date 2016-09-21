<?php /* Smarty version 2.6.26, created on 2016-09-11 21:01:48
         compiled from documents/docs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'documents/docs.tpl', 41, false),array('modifier', 'default', 'documents/docs.tpl', 88, false),array('modifier', 'stripslashes', 'documents/docs.tpl', 162, false),array('modifier', 'date_format', 'documents/docs.tpl', 298, false),array('modifier', 'pretty_date', 'documents/docs.tpl', 298, false),)), $this); ?>
<div class="title"><h5><?php echo $this->_config[0]['vars']['DOC_SUB_TITLE']; ?>
</h5></div>

<div class="widget" style="margin-top: 0px;">
	<div class="body">
		<?php echo $this->_config[0]['vars']['DOC_TIPS']; ?>

	</div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><?php echo $this->_config[0]['vars']['DOC_SUB_TITLE']; ?>
</li>
		</ul>
	</div>
</div>

<?php if (check_permission ( 'document_view' )): ?>

<div class="widget first">
<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
	<col width="50%">
	<col width="50%">
	<thead>
	<tr>
		<td><?php echo $this->_config[0]['vars']['MAIN_ADD_IN_RUB']; ?>
</td>
		<td><?php echo $this->_config[0]['vars']['MAIN_SORT_DOCUMENTS']; ?>
</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="padding:8px;">
			<form action="index.php" method="get" id="add_docum" class="mainForm">
				<input type="hidden" name="cp" value="<?php echo $this->_tpl_vars['sess']; ?>
" />
				<input type="hidden" name="do" value="docs" />
				<input type="hidden" name="action" value="new" />
				<select name="rubric_id" id="DocName" style="width: 250px;">
					<option value=""><?php echo $this->_config[0]['vars']['DOC_CHOSE_RUB']; ?>
</option>
					<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<?php if ($this->_tpl_vars['rubric']->Show == 1): ?>
							<option value="<?php echo $this->_tpl_vars['rubric']->Id; ?>
"<?php if ($_REQUEST['rubric_id'] == $this->_tpl_vars['rubric']->Id): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				&nbsp;
				<input style="width:85px" type="submit" class="basicBtn AddDocs" value="<?php echo $this->_config[0]['vars']['MAIN_BUTTON_ADD']; ?>
" />
			</form>
		</td>

		<td style="padding:8px;">
			<form action="index.php" method="get" class="mainForm">
				<input type="hidden" name="cp" value="<?php echo $this->_tpl_vars['sess']; ?>
" />
				<input type="hidden" name="do" value="docs" />
				<select name="rubric_id" id="RubrikSort" style="width: 250px;">
					<option value="all"><?php echo $this->_config[0]['vars']['MAIN_ALL_RUBRUKS']; ?>
</option>
					<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<?php if ($this->_tpl_vars['rubric']->Show == 1): ?>
							<option value="<?php echo $this->_tpl_vars['rubric']->Id; ?>
"<?php if ($_REQUEST['rubric_id'] == $this->_tpl_vars['rubric']->Id): ?> selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				&nbsp;
				<input style="width:85px" type="submit" class="basicBtn" value="<?php echo $this->_config[0]['vars']['MAIN_BUTTON_SORT']; ?>
" />
			</form>
		</td>
	</tr>
	</tbody>
</table>
</div>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'documents/doc_search.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="widget first">
<div class="head">
	<h5 class="iFrames"><?php echo $this->_config[0]['vars']['MAIN_DOCUMENTS_ALL']; ?>
</h5>
	<div class="num">
		<a class="basicNum" href="index.php?do=docs&action=aliases&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_ALIASES']; ?>
</a>
	</div>
</div>
<form class="mainForm" method="post" action="index.php?do=docs&action=editstatus&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
	<div class="body">
		<strong><?php echo $this->_config[0]['vars']['DOC_SORT_TEXT']; ?>
</strong>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'id'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'id_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=id<?php if ($_REQUEST['sort'] == 'id'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_ID']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'title'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'title_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=title<?php if ($_REQUEST['sort'] == 'title'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_TITLE']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'alias'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'alias_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=alias<?php if ($_REQUEST['sort'] == 'alias'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_URL_RUB']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'rubric'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'rubric_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=rubric<?php if ($_REQUEST['sort'] == 'rubric'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_IN_RUBRIK']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'published'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'published_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=published<?php if ($_REQUEST['sort'] == 'published'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_CREATED']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'changed'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'changed_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=changed<?php if ($_REQUEST['sort'] == 'changed' || ! $_REQUEST['sort']): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_EDIT']; ?>
</a>
		</span>

		<span class="mrl5">
		<?php if ($_REQUEST['sort'] == 'author'): ?><span class="arrow">&uarr;</span><?php elseif ($_REQUEST['sort'] == 'author_desc'): ?><span class="arrow">&darr;</span><?php endif; ?>
		<a class="link" href="<?php echo $this->_tpl_vars['link']; ?>
&sort=author<?php if ($_REQUEST['sort'] == 'author'): ?>_desc<?php endif; ?>&page=<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1')); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_AUTHOR']; ?>
</a>
		</span>
	</div>

<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic" id="docs">
	<col width="10">
	<col width="10">
	<col>
	<col width="150">
	<col width="180">
	<?php if (! @ADMIN_EDITMENU): ?><col width="141"><?php endif; ?>

	<?php if ($this->_tpl_vars['docs']): ?>
	<thead>
	<tr>
		<td><div align="center"><input type="checkbox" id="selall" value="1" /></div></td>
		<td><?php echo $this->_config[0]['vars']['DOC_ID']; ?>
</td>
		<td nowrap="nowrap">
			<?php echo $this->_config[0]['vars']['DOC_TITLE']; ?>
&nbsp;|&nbsp;<?php echo $this->_config[0]['vars']['DOC_URL_RUB']; ?>

		</td>
		<td><?php echo $this->_config[0]['vars']['DOC_IN_RUBRIK']; ?>
</td>
		<td><?php echo $this->_config[0]['vars']['DOC_CREATED']; ?>
&nbsp;|&nbsp;<?php echo $this->_config[0]['vars']['DOC_EDIT']; ?>
</td>
		<?php if (! @ADMIN_EDITMENU): ?><td <?php if (@ADMIN_EDITMENU): ?>colspan="7"<?php else: ?>colspan="14"<?php endif; ?> align="center"><?php echo $this->_config[0]['vars']['DOC_ACTIONS']; ?>
</td><?php endif; ?>
	</tr>
	</thead>
	<?php endif; ?>

	<tbody>
	<?php if ($this->_tpl_vars['docs']): ?>
	<?php $_from = $this->_tpl_vars['docs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr <?php if ($this->_tpl_vars['item']->document_deleted == 1): ?>class="red"<?php endif; ?><?php if ($this->_tpl_vars['item']->document_status != 1): ?>class="yellow"<?php endif; ?>>
			<td nowrap="nowrap"><input name="document[<?php echo $this->_tpl_vars['item']->Id; ?>
]" type="checkbox" value="1" <?php if (( $this->_tpl_vars['item']->cantEdit != 1 || $this->_tpl_vars['item']->canOpenClose != 1 || $this->_tpl_vars['item']->canEndDel != 1 ) && ( $this->_tpl_vars['item']->Id == 1 || $this->_tpl_vars['item']->Id == $this->_tpl_vars['PAGE_NOT_FOUND_ID'] )): ?>disabled<?php endif; ?> class="checkbox" /></td>
			<td align="center" nowrap="nowrap"><strong><a class="toprightDir" title="<?php echo $this->_config[0]['vars']['DOC_SHOW_TITLE']; ?>
" href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?>index.php?id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
<?php endif; ?>" target="_blank"><?php echo $this->_tpl_vars['item']->Id; ?>
</a></strong></td>

			<td>
				<div class="docaction">
				<?php if ($this->_tpl_vars['item']->cantEdit == 1): ?>

					<?php if ($this->_tpl_vars['item']->rubric_admin_teaser_template != ""): ?>
						<?php echo $this->_tpl_vars['item']->rubric_admin_teaser_template; ?>

					<?php else: ?>
					<strong>
						<a class="toprightDir docname" title="<?php echo $this->_config[0]['vars']['DOC_EDIT_TITLE']; ?>
" href="index.php?do=docs&action=edit&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
							<?php if ($this->_tpl_vars['item']->document_breadcrum_title != ""): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_breadcrum_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php elseif ($this->_tpl_vars['item']->document_title != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['DOC_SHOW3_TITLE']; ?>

							<?php endif; ?>
						</a>
					</strong>
					<br />
					<span class="code">url:</span>&nbsp;
					<a class="toprightDir" title="<?php echo $this->_config[0]['vars']['DOC_SHOW2_TITLE']; ?>
" href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?><?php echo $this->_tpl_vars['item']->document_alias; ?>
<?php endif; ?>" target="_blank">
						<span class="dgrey doclink"><?php echo $this->_tpl_vars['item']->document_alias; ?>
</span>
					</a>
					&nbsp;|&nbsp;
					<span class="dgrey"><?php echo $this->_config[0]['vars']['DOC_CLICKS']; ?>
: </span> <strong class="code"><?php echo $this->_tpl_vars['item']->document_count_view; ?>
</strong>
					<?php endif; ?>

					<div class="actions" style="display: none;">

					<?php if (@ADMIN_EDITMENU): ?>

						<!-- Редактировать -->
						<?php if ($this->_tpl_vars['item']->cantEdit == 1): ?>
							<a class="topDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_EDIT_TITLE']; ?>
" href="index.php?do=docs&action=edit&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
								<span class="icon_sprite_doc icon_edit"></span>
							</a>
						<?php endif; ?>

						<!-- Копировать -->
						<?php if ($this->_tpl_vars['item']->cantEdit == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
							<a class="topDir CopyDocs floatleft" title="<?php echo $this->_config[0]['vars']['DOC_COPY']; ?>
" href="index.php?do=docs&action=copy&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
								<span class="icon_sprite_doc icon_copy"></span>
							</a>
						<?php endif; ?>

						<!-- Заметки -->
						<?php if (check_permission ( 'remark_view' )): ?>
							<?php if ($this->_tpl_vars['item']->ist_remark == '0'): ?>
							<a class="topDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_CREATE_NOTICE_TITLE']; ?>
" href="javascript:void(0);" onclick="windowOpen('index.php?do=docs&action=remark&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','800','700','1','docs');">
								<span class="icon_sprite_doc icon_comment"></span>
							</a>
							<?php else: ?>
							<a class="topDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_CREATE_NOTICE_TITLE']; ?>
" href="javascript:void(0);" onclick="windowOpen('index.php?do=docs&action=remark_reply&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','800','700','1','docs');">
								<span class="icon_sprite_doc icon_comment"></span>
							</a>
							<?php endif; ?>
						<?php endif; ?>

						<!-- Публикация -->
						<?php if ($this->_tpl_vars['item']->document_deleted != 1): ?>
							<?php if ($this->_tpl_vars['item']->document_status == 1): ?>
								<?php if ($this->_tpl_vars['item']->canOpenClose == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
									<a class="topDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_DISABLE_TITLE']; ?>
" href="index.php?do=docs&action=close&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
										<span class="icon_sprite_doc icon_public_on"></span>
									</a>
								<?php endif; ?>
							<?php else: ?>
								<?php if ($this->_tpl_vars['item']->canOpenClose == 1): ?>
									<a class="topDir floatleft public" title="<?php echo $this->_config[0]['vars']['DOC_ENABLE_TITLE']; ?>
" href="index.php?do=docs&action=open&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
										<span class="icon_sprite_doc icon_public"></span>
									</a>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>

						<!-- Корзина -->
						<?php if ($this->_tpl_vars['item']->document_deleted == 1): ?>
							<a class="topDir floatleft recylce" title="<?php echo $this->_config[0]['vars']['DOC_RESTORE_DELETE']; ?>
" href="index.php?do=docs&action=redelete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
								<span class="icon_sprite_doc icon_recylce_on "></span>
							</a>
						<?php else: ?>
							<?php if ($this->_tpl_vars['item']->canDelete == 1): ?>
							<a class="ConfirmRecycle topDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_TEMPORARY_DELETE']; ?>
"  href="index.php?do=docs&action=delete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
								<span class="icon_sprite_doc icon_recylce"></span>
							</a>
							<?php endif; ?>
						<?php endif; ?>

						<!-- Удалить -->
						<?php if ($this->_tpl_vars['item']->canEndDel == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
							<a class="ConfirmDelete topDir" title="<?php echo $this->_config[0]['vars']['DOC_FINAL_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['DOC_FINAL_DELETE']; ?>
" name="<?php echo $this->_config[0]['vars']['DOC_FINAL_CONFIRM']; ?>
" href="index.php?do=docs&action=enddelete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite_doc icon_delete floatleft"></span></a>
						<?php endif; ?>

					<?php endif; ?>
					</div>

				<?php else: ?>
					<strong>
					<?php if ($this->_tpl_vars['item']->document_breadcrum_title != ""): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_breadcrum_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php elseif ($this->_tpl_vars['item']->document_title != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['DOC_SHOW3_TITLE']; ?>

					<?php endif; ?>
					</strong>
					<br />
					<span class="code">url:</span>&nbsp;
					<a class="toprightDir" title="<?php echo $this->_config[0]['vars']['DOC_SHOW2_TITLE']; ?>
" href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?><?php echo $this->_tpl_vars['item']->document_alias; ?>
<?php endif; ?>" target="_blank">
						<span class="dgrey doclink"><?php echo $this->_tpl_vars['item']->document_alias; ?>
</span>
					</a>
					&nbsp;|&nbsp;
					<span class="dgrey"><?php echo $this->_config[0]['vars']['DOC_CLICKS']; ?>
: </span> <strong class="code"><?php echo $this->_tpl_vars['item']->document_count_view; ?>
</strong>
				<?php endif; ?>
				</div>
			</td>

			<td nowrap="nowrap" align="center">
				<?php if ($this->_tpl_vars['item']->cantEdit == 1): ?>

					<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<?php if ($this->_tpl_vars['item']->rubric_id == $this->_tpl_vars['rubric']->Id): ?>
							<a href="javascript:void(0);" title="<?php echo $this->_config[0]['vars']['DOC_CHANGE_RUBRIC']; ?>
" class="link topDir" onclick="windowOpen('index.php?do=docs&action=change&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','650','550','1','docs');">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</a>
							<br />
							<?php if (@UGROUP == 1): ?>
							<strong><?php echo $this->_config[0]['vars']['DOC_AUTHOR']; ?>
:</strong> <a class="link topDir" title="<?php echo $this->_config[0]['vars']['DOC_CHANGE_AUTOR']; ?>
" href="javascript:void(0);" id="doc_id_<?php echo $this->_tpl_vars['item']->Id; ?>
" onclick="windowOpen('index.php?do=docs&action=change_user&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','750','500','1','docs');"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_author)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
							<?php else: ?>
							<strong><?php echo $this->_config[0]['vars']['DOC_AUTHOR']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_author)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>

				<?php else: ?>
					<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<?php if ($this->_tpl_vars['item']->rubric_id == $this->_tpl_vars['rubric']->Id): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							<br />
							<strong><?php echo $this->_config[0]['vars']['DOC_AUTHOR']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_author)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</td>

			<td align="center">

				<div class="docaction">
					<div class="doc_message">
						<?php if ($this->_tpl_vars['item']->ist_remark != '0'): ?>
							<div class="remarks"><span title="<?php echo $this->_config[0]['vars']['DOC_ICON_COMMENT']; ?>
" class="icon_sprite_doc icon_comment topDir"></span></div>
						<?php endif; ?>
					</div>
					<span class="date_text dgrey">
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_published)) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>

						<br />
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_changed)) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>

					</span>
				</div>
			</td>


			<?php if (! @ADMIN_EDITMENU): ?>
			<td align="center" nowrap="nowrap" class="actions">
				<?php if (check_permission ( 'remarks' )): ?>
					<?php if ($this->_tpl_vars['item']->ist_remark == '0'): ?>
						<a class="topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_CREATE_NOTICE_TITLE']; ?>
" href="javascript:void(0);" onclick="windowOpen('index.php?do=docs&action=remark&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','800','700','1','docs');"><span class="icon_sprite ico_comment"></span></a>
					<?php else: ?>
						<a class="topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_REPLY_NOTICE_TITLE']; ?>
" href="javascript:void(0);" onclick="windowOpen('index.php?do=docs&action=remark_reply&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','800','700','1','docs');"><span class="icon_sprite ico_comment"></span></a>
					<?php endif; ?>
				<?php else: ?>
									<?php endif; ?>

				<?php if ($this->_tpl_vars['item']->cantEdit == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
					<a class="topleftDir CopyDocs floatleft" title="<?php echo $this->_config[0]['vars']['DOC_COPY']; ?>
" href="index.php?do=docs&action=copy&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_copy"></span></a>
	 				<?php else: ?>
									<?php endif; ?>

				<?php if ($this->_tpl_vars['item']->cantEdit == 1): ?>
					<a class="topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_EDIT_TITLE']; ?>
" href="index.php?do=docs&action=edit&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_edit"></span></a>
				<?php else: ?>
									<?php endif; ?>

				<?php if ($this->_tpl_vars['item']->document_deleted == 1): ?>
									<?php else: ?>
					<?php if ($this->_tpl_vars['item']->document_status == 1): ?>
						<?php if ($this->_tpl_vars['item']->canOpenClose == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
							<a class="topleftDir lock floatleft" ajax="index.php?do=docs&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" title="<?php echo $this->_config[0]['vars']['DOC_DISABLE_TITLE']; ?>
" href="index.php?do=docs&action=close&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_unlock"></span></a>
						<?php else: ?>
							<?php if ($this->_tpl_vars['item']->cantEdit == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
				   										<?php else: ?>
														<?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['item']->canOpenClose == 1): ?>
							<a class="topleftDir floatleft" ajax="index.php?do=docs&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" title="<?php echo $this->_config[0]['vars']['DOC_ENABLE_TITLE']; ?>
" href="index.php?do=docs&action=open&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_lock"></span></a>
						<?php else: ?>
							<?php if ($this->_tpl_vars['item']->cantEdit == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
														<?php else: ?>
														<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['item']->document_deleted == 1): ?>
					<a class="topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_RESTORE_DELETE']; ?>
" href="index.php?do=docs&action=redelete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_recylce_on"></span></a>
				<?php else: ?>
					<?php if ($this->_tpl_vars['item']->canDelete == 1): ?>
						<a class="ConfirmRecycle topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_TEMPORARY_DELETE']; ?>
"  href="index.php?do=docs&action=delete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_recylce"></span></a>
					<?php else: ?>
											<?php endif; ?>
				<?php endif; ?>

				<?php if ($this->_tpl_vars['item']->canEndDel == 1 && $this->_tpl_vars['item']->Id != 1 && $this->_tpl_vars['item']->Id != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
					<a class="ConfirmDelete topleftDir floatleft" title="<?php echo $this->_config[0]['vars']['DOC_FINAL_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['DOC_FINAL_DELETE']; ?>
" name="<?php echo $this->_config[0]['vars']['DOC_FINAL_CONFIRM']; ?>
" href="index.php?do=docs&action=enddelete&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><span class="icon_sprite ico_delete"></span></a>
				<?php else: ?>
									<?php endif; ?>
			</td>
			<?php endif; ?>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
			<tr>
				<td <?php if (@ADMIN_EDITMENU): ?>colspan="7"<?php else: ?>colspan="14"<?php endif; ?>>
					<ul class="messages">
						<li class="highlight yellow"><?php echo $this->_config[0]['vars']['DOC_NO_DOCS']; ?>
</li>
					</ul>
				</td>
			</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['docs']): ?>
	<thead>
	<tr>
		<td></td>
		<td><?php echo $this->_config[0]['vars']['DOC_ID']; ?>
</td>
		<td nowrap="nowrap">
			<?php echo $this->_config[0]['vars']['DOC_TITLE']; ?>
&nbsp;|&nbsp;<?php echo $this->_config[0]['vars']['DOC_URL_RUB']; ?>

		</td>
		<td><?php echo $this->_config[0]['vars']['DOC_IN_RUBRIK']; ?>
</td>
		<td><?php echo $this->_config[0]['vars']['DOC_CREATED']; ?>
&nbsp;|&nbsp;<?php echo $this->_config[0]['vars']['DOC_EDIT']; ?>
</td>
		<?php if (! @ADMIN_EDITMENU): ?><td colspan="6" align="center"><?php echo $this->_config[0]['vars']['DOC_ACTIONS']; ?>
</td><?php endif; ?>
	</tr>
	</thead>
	<?php endif; ?>
</tbody>
</table>

<?php if (check_permission ( 'alle' )): ?>
<div class="rowElem" id="saveBtn">
	<div class="saveBtn">
			<select name="moderation" class="action-in-moderation" style="width: 250px;">
				<option value="none" selected="selected"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT']; ?>
</option>
				<option value="1"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT_ACT']; ?>
</option>
				<option value="0"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT_NACT']; ?>
</option>
				<option value="intrash"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT_TRASH']; ?>
</option>
				<option value="outtrash"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT_OUTTRASH']; ?>
</option>
				<option value="trash"><?php echo $this->_config[0]['vars']['DOC_ACTION_SELECT_DEL']; ?>
</option>
			</select>
			&nbsp;&nbsp;<input type="submit" class="basicBtn" value="<?php echo $this->_config[0]['vars']['DOC_ACTION_BUTTON']; ?>
" onclick="document.getElementById('nf_save_next').value='save'" />
	</div>
</div>
<?php endif; ?>

</form>
</div>

<?php if ($this->_tpl_vars['page_nav']): ?>
	<div class="pagination">
	<ul class="pages">
		<?php echo $this->_tpl_vars['page_nav']; ?>

	</ul>
	</div>
<?php endif; ?>

<script language="Javascript" type="text/javascript">
$(document).ready(function(){

	$(".AddDocs").click( function(e) {
		e.preventDefault();
		var DocName = $('#add_docum #DocName').fieldValue();
		var title = '<?php echo $this->_config[0]['vars']['MAIN_ADD_IN_RUB']; ?>
';
		var text = '<?php echo $this->_config[0]['vars']['DOC_ENTER_NAME']; ?>
';
		if (DocName == ""){
			jAlert(text,title);
		}else{
			$.alerts._overlay('show');
			$("#add_docum").submit();
		}
	});

	$('#selall').on('change', function(event) {
		event.preventDefault();
		if ($('#selall').is(':checked')) {
			$('#docs .checkbox').attr('checked','checked');
			$('#docs .checkbox').addClass('jqTransformChecked');
			$("#docs a.jqTransformCheckbox").addClass("jqTransformChecked");
		} else {
			$('#docs .checkbox').removeClass('jqTransformChecked');
			$('#docs .checkbox').removeAttr('checked');
			$("#docs a.jqTransformCheckbox").removeClass("jqTransformChecked");
		}
	});

	$(".ConfirmRecycle").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		var title = '<?php echo $this->_config[0]['vars']['DOC_TEMPORARY_DELETE']; ?>
';
		var confirm = '<?php echo $this->_config[0]['vars']['DOC_TEMPORARY_CONFIRM']; ?>
';
		jConfirm(
				confirm,
				title,
				function(b){
					if (b){
						$.alerts._overlay('show');
						window.location = href;
					}
				}
			);
	});

	$(".CopyDocs").click( function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		var title = '<?php echo $this->_config[0]['vars']['DOC_COPY']; ?>
';
		var text = '<?php echo $this->_config[0]['vars']['DOC_COPY_TIP']; ?>
';
		jPrompt(text, '', title, function(b){
					if (b){
						$.alerts._overlay('show');
						window.location = href + '&document_title=' + b;
						}else{
							$.jGrowl("<?php echo $this->_config[0]['vars']['MAIN_NO_ADD_DOCS']; ?>
", {theme: 'error'});
						}
				}
			);
	});

	 $(".docaction").hover(
		  function() {$(this).children(".actions").show("fade", 10);},
		  function() {$(this).children(".actions").hide("fade", 10);}
	 );


<?php echo '

	function action(href, actions){
		$.ajax({
				beforeSend: function(){
					$.alerts._overlay(\'show\');
					},
				url: href,
				data: ({
					action: actions,
					ajax: \'1\',
					pop: \'1\'
					}),
				timeout:3000,
				dataType: "json",
				success: function(data){
					$.alerts._overlay(\'hide\');
					$.jGrowl(data[0],{theme: data[1]});
				},
				error: function (xhr, ajaxOptions, thrownError) {
					$.alerts._overlay(\'hide\');
					$.jGrowl(xhr.status + thrownError, {theme: \'error\'});
				}
			});
		};

		$(\'.lock\').on(\'click\', function(e){
			e.preventDefault();
			if($(this).hasClass(\'ico_unlock\')){
				action($(this).attr(\'ajax\'),\'close\');
				$(this).removeClass("ico_unlock").addClass("ico_lock");
			} else if ($(this).hasClass(\'ico_lock\')){
				action($(this).attr(\'ajax\'),\'open\');
				$(this).removeClass("ico_lock").addClass("ico_unlock")
			}
		});

'; ?>





});
</script>