<?php /* Smarty version 2.6.26, created on 2016-09-11 21:01:48
         compiled from documents/doc_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'documents/doc_search.tpl', 111, false),array('modifier', 'escape', 'documents/doc_search.tpl', 115, false),array('modifier', 'stripslashes', 'documents/doc_search.tpl', 115, false),)), $this); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#document_published').datepicker({
			changeMonth: true,
			changeYear: true,

			onClose: function(dateText, inst) {
			var endDateTextBox = $('#document_expire');
			if (endDateTextBox.val() != '') {
				var testStartDate = new Date(dateText);
				var testEndDate = new Date(endDateTextBox.val());
				if (testStartDate > testEndDate)
					endDateTextBox.val(dateText);
			}
			else {
				endDateTextBox.val(dateText);
			}
			},
			onSelect: function (selectedDateTime){
				var start = $(this).datetimepicker('getDate');
				$('#document_expire').datetimepicker('option', 'minDate', new Date(start.getTime()));
			}
		});

		<?php echo '
		$(\'.collapsible\').collapsible({
			defaultOpen: \'opened\',
			cssOpen: \'inactive\',
			cssClose: \'normal\',
			cookieName: \'collaps_doc\',
			cookieOptions: {
				expires: 7,
				domain: \'\'
			},
			speed: 5,
			loadOpen: function(elem, opts) {
				$(".mainForm select").not("[multiple*=multiple]").styler({
					selectVisibleOptions: 5,
					selectSearch: false
				});
				elem.next().show();
			},
			loadClose: function(elem, opts) {
				$(".mainForm select").not("[multiple*=multiple]").styler({
					selectVisibleOptions: 5,
					selectSearch: false
				});
				elem.next().hide();
			}
		});
		'; ?>


		$('#document_expire').datepicker({
			changeMonth: true,
			changeYear: true,

			onClose: function(dateText, inst) {
			var startDateTextBox = $('#document_published');
			if (startDateTextBox.val() != '') {
				var testStartDate = new Date(startDateTextBox.val());
				var testEndDate = new Date(dateText);
				if (testStartDate > testEndDate)
					startDateTextBox.val(dateText);
			}
			else {
				startDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
			var end = $(this).datetimepicker('getDate');
			$('#document_published').datetimepicker('option', 'maxDate', new Date(end.getTime()) );
		}
		});
	});
</script>


<form method="get" id="doc_search" action="index.php" class="mainForm">
	<input type="hidden" name="do" value="docs" />
	<?php if ($_REQUEST['action']): ?><input type="hidden" name="action" value="<?php echo $_REQUEST['action']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['target_title']): ?><input type="hidden" name="target_title" value="<?php echo $_REQUEST['target_title']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['target']): ?><input type="hidden" name="target" value="<?php echo $_REQUEST['target']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['doc']): ?><input type="hidden" name="doc" value="<?php echo $_REQUEST['doc']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['document_alias']): ?><input type="hidden" name="document_alias" value="<?php echo $_REQUEST['document_alias']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['idtitle']): ?><input type="hidden" name="idtitle" value="<?php echo $_REQUEST['idtitle']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['selurl']): ?><input type="hidden" name="selurl" value="<?php echo $_REQUEST['selurl']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['selecturl']): ?><input type="hidden" name="selecturl" value="<?php echo $_REQUEST['selecturl']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['idonly']): ?><input type="hidden" name="idonly" value="<?php echo $_REQUEST['idonly']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['sort']): ?><input type="hidden" name="sort" value="<?php echo $_REQUEST['sort']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['pop']): ?><input type="hidden" name="pop" value="<?php echo $_REQUEST['pop']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['CKEditor']): ?><input type="hidden" name="CKEditor" value="<?php echo $_REQUEST['CKEditor']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['CKEditorFuncNum']): ?><input type="hidden" name="CKEditorFuncNum" value="<?php echo $_REQUEST['CKEditorFuncNum']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['langCode']): ?><input type="hidden" name="langCode" value="<?php echo $_REQUEST['langCode']; ?>
" />
	<?php endif; ?><?php if ($_REQUEST['function']): ?><input type="hidden" name="function" value="<?php echo $_REQUEST['function']; ?>
" />
	<?php endif; ?><input type="hidden" name="TimeSelect" value="1" />

<div class="widget first">
	<div class="head collapsible" id="opened"><h5><?php echo $this->_config[0]['vars']['MAIN_SEARCH_DOCUMENTS']; ?>
</h5></div>
	<div style="display: block;">

<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
		<col width="150">
		<col width="120">
		<col width="160">
		<col>
		<col width="120">
		<col>
		<tr class="noborder">
			<td rowspan="2"><strong><?php echo $this->_config[0]['vars']['MAIN_TIME_PERIOD']; ?>
</strong></td>
			<td>
				<div class="pr12"><input id="document_published" name="document_published" type="text" value="<?php echo ((is_array($_tmp=$_REQUEST['document_published'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" placeholder="<?php echo $this->_config[0]['vars']['MAIN_TIME_START']; ?>
" /></div>
			</td>
			<td><strong><?php echo $this->_config[0]['vars']['MAIN_TITLE_SEARCH']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;"  class="topDir link" title="<?php echo $this->_config[0]['vars']['MAIN_SEARCH_HELP']; ?>
">[?]</a></strong></td>
			<td>
				<div class="pr12"><input type="text" name="QueryTitel" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['QueryTitel'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" placeholder="<?php echo $this->_config[0]['vars']['MAIN_TITLE_DOC_NAME']; ?>
" /></div>
			</td>
			<td><strong><?php echo $this->_config[0]['vars']['MAIN_SELECT_RUBRIK']; ?>
</strong></td>
			<td>
				<select name="rubric_id" id="rubric_id" style="width: 200px;">
					<option value="all"><?php echo $this->_config[0]['vars']['MAIN_ALL_RUBRUKS']; ?>
</option>
					<?php $_from = $this->_tpl_vars['rubrics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rubric']):
?>
						<option value="<?php echo $this->_tpl_vars['rubric']->Id; ?>
" <?php if ($_REQUEST['rubric_id'] == $this->_tpl_vars['rubric']->Id): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				<div class="pr12"><input id="document_expire" name="document_expire" type="text" value="<?php echo ((is_array($_tmp=$_REQUEST['document_expire'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
" placeholder="<?php echo $this->_config[0]['vars']['MAIN_TIME_END']; ?>
" /></div>
			</td>
			<td><strong><?php echo $this->_config[0]['vars']['MAIN_ID_SEARCH']; ?>
</strong></td>
			<td><input style="width:80px" type="text" name="doc_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_REQUEST['doc_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" placeholder="<?php echo $this->_config[0]['vars']['MAIN_TITLE_DOC_ID']; ?>
" /></td>
			<td><strong><?php echo $this->_config[0]['vars']['MAIN_DOCUMENT_STATUS']; ?>
</strong></td>
			<td>
				<select style="width:185px" name="status">
					<option value="All"><?php echo $this->_config[0]['vars']['MAIN_ALL_DOCUMENTS']; ?>
</option>
					<option value="Opened" <?php if ($_REQUEST['status'] == 'Opened'): ?>selected<?php endif; ?>><?php echo $this->_config[0]['vars']['MAIN_DOCUMENT_ACTIVE']; ?>
</option>
					<option value="Closed" <?php if ($_REQUEST['status'] == 'Closed'): ?>selected<?php endif; ?>><?php echo $this->_config[0]['vars']['MAIN_DOCUMENT_INACTIVE']; ?>
</option>
					<option value="Deleted" <?php if ($_REQUEST['status'] == 'Deleted'): ?>selected<?php endif; ?>><?php echo $this->_config[0]['vars']['MAIN_TEMP_DELETE_DOCS']; ?>
</option>
				</select>
			</td>
		</tr>

		<tr>
			<td colspan="6">
				<label class="inline"><?php echo $this->_config[0]['vars']['MAIN_RESULTS_ON_PAGE']; ?>
</label>&nbsp;
				<select style="width:70px" name="Datalimit">
					<?php unset($this->_sections['dl']);
$this->_sections['dl']['loop'] = is_array($_loop=150) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dl']['name'] = 'dl';
$this->_sections['dl']['step'] = ((int)15) == 0 ? 1 : (int)15;
$this->_sections['dl']['show'] = true;
$this->_sections['dl']['max'] = $this->_sections['dl']['loop'];
$this->_sections['dl']['start'] = $this->_sections['dl']['step'] > 0 ? 0 : $this->_sections['dl']['loop']-1;
if ($this->_sections['dl']['show']) {
    $this->_sections['dl']['total'] = min(ceil(($this->_sections['dl']['step'] > 0 ? $this->_sections['dl']['loop'] - $this->_sections['dl']['start'] : $this->_sections['dl']['start']+1)/abs($this->_sections['dl']['step'])), $this->_sections['dl']['max']);
    if ($this->_sections['dl']['total'] == 0)
        $this->_sections['dl']['show'] = false;
} else
    $this->_sections['dl']['total'] = 0;
if ($this->_sections['dl']['show']):

            for ($this->_sections['dl']['index'] = $this->_sections['dl']['start'], $this->_sections['dl']['iteration'] = 1;
                 $this->_sections['dl']['iteration'] <= $this->_sections['dl']['total'];
                 $this->_sections['dl']['index'] += $this->_sections['dl']['step'], $this->_sections['dl']['iteration']++):
$this->_sections['dl']['rownum'] = $this->_sections['dl']['iteration'];
$this->_sections['dl']['index_prev'] = $this->_sections['dl']['index'] - $this->_sections['dl']['step'];
$this->_sections['dl']['index_next'] = $this->_sections['dl']['index'] + $this->_sections['dl']['step'];
$this->_sections['dl']['first']      = ($this->_sections['dl']['iteration'] == 1);
$this->_sections['dl']['last']       = ($this->_sections['dl']['iteration'] == $this->_sections['dl']['total']);
?>
						<option value="<?php echo $this->_sections['dl']['index']+15; ?>
" <?php if ($_REQUEST['Datalimit'] == $this->_sections['dl']['index']+15): ?>selected<?php endif; ?>><?php echo $this->_sections['dl']['index']+15; ?>
</option>
					<?php endfor; endif; ?>
				</select>
				&nbsp;
				<input type="submit" class="basicBtn" value="<?php echo $this->_config[0]['vars']['MAIN_BUTTON_SEARCH']; ?>
" />
			</td>
		</tr>

		<?php if ($_REQUEST['rubric_id']): ?>

		<?php endif; ?>

	</table>
	<input type="hidden" name="cp" value="<?php echo $this->_tpl_vars['sess']; ?>
" />

	</div>
</div>

</form>