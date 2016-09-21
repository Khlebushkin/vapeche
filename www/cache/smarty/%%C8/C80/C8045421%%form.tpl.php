<?php /* Smarty version 2.6.26, created on 2016-09-11 21:02:05
         compiled from documents/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'documents/form.tpl', 154, false),array('modifier', 'stripslashes', 'documents/form.tpl', 349, false),array('modifier', 'date_format', 'documents/form.tpl', 473, false),array('modifier', 'pretty_date', 'documents/form.tpl', 637, false),)), $this); ?>
<?php if ($_SESSION['use_editor'] == 0): ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/ckeditor/vendor/jquery.spellchecker.js"></script>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/ckeditor/vendor/jquery.spellchecker.css" type="text/css" media="all" />
<?php endif; ?>

<?php if ($_SESSION['use_editor'] == 1): ?>
	<!-- elrte -->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elrte/css/elrte.full.css" type="text/css" media="screen" />
	<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elrte/js/elrte.full.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elrte/js/i18n/elrte.ru.js" type="text/javascript"></script>

	<!-- elfinder -->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/css/elfinder.full.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/css/theme.css" type="text/css" media="screen" />

	<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/js/elfinder.full.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/js/i18n/elfinder.ru.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/redactor/elfinder/js/jquery.dialogelfinder.js" type="text/javascript"></script>

	<script type="text/javascript" src="<?php echo $this->_tpl_vars['tpl_dir']; ?>
/js/rle.js"></script>
<?php endif; ?>

<script type="text/javascript">

function openLinkWin(target) {
	if (typeof width=='undefined' || width=='') var width = screen.width * 0.8;
	if (typeof height=='undefined' || height=='') var height = screen.height * 0.7;
	var left = ( screen.width - width ) / 2;
	var top = ( screen.height - height ) / 2;
	window.open('index.php?do=docs&action=showsimple&target='+target+'&selurl=1&pop=1','pop','left='+left+',top='+top+',width='+width+',height='+height+',scrollbars=1,resizable=1');
}

function openLinkWinId(target,doc) {
	if (typeof width=='undefined' || width=='') var width = screen.width * 0.8;
	if (typeof height=='undefined' || height=='') var height = screen.height * 0.7;
	if (typeof doc=='undefined') var doc = 'doc_title';
	if (typeof scrollbar=='undefined') var scrollbar=1;
	var left = ( screen.width - width ) / 2;
	var top = ( screen.height - height ) / 2;
	window.open('index.php?idonly=1&do=docs&action=showsimple&doc='+doc+'&target='+target+'&pop=1&cp=<?php echo $this->_tpl_vars['sess']; ?>
','pop','left='+left+',top='+top+',width='+width+',height='+height+',scrollbars='+scrollbar+',resizable=1');
}

function openFileWin(target,id) {
	if (typeof width=='undefined' || width=='') var width = screen.width * 0.8;
	if (typeof height=='undefined' || height=='') var height = screen.height * 0.7;
	if (typeof doc=='undefined') var doc = 'doc_title';
	if (typeof scrollbar=='undefined') var scrollbar=1;
	var left = ( screen.width - width ) / 2;
	var top = ( screen.height - height ) / 2;
	window.open('index.php?do=browser&id='+id+'&typ=bild&mode=fck&target=navi&cp=<?php echo $this->_tpl_vars['sess']; ?>
','pop','left='+left+',top='+top+',width='+width+',height='+height+',scrollbars='+scrollbar+',resizable=1');
}

$(document).ready(function(){

	$(".ConfirmRecover").click( function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		var title = $(this).attr('dir');
		var confirm = $(this).attr('name');
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

	$(".ConfirmDeleteRev").click( function(e) {
		e.preventDefault();
		var revission = $(this).attr('rev');
		var href = $(this).attr('href');
		var title = $(this).attr('dir');
		var confirm = $(this).attr('name');
		jConfirm(
				confirm,
				title,
				function(b){
					if (b){
						$.alerts._overlay('hide');
						$.alerts._overlay('show');
						$.ajax({
							url: ave_path+'admin/'+href+'&ajax=run',
							type: 'POST',
							success: function (data) {
								$.alerts._overlay('hide');
								$.jGrowl(revission,{theme: 'accept'});
								$("#"+revission).remove();
							}
						});
					}
				}
			);
	});

	function check(){
		$.ajax({
			beforeSend: function(){
				},
			url: 'index.php',
			data: ({
				'action': 'checkurl',
				'do': 'docs',
				'check': false,
				'cp': '<?php echo $this->_tpl_vars['sess']; ?>
',
				'id': '<?php echo $this->_tpl_vars['document']->Id; ?>
',
				'alias': $("#document_alias").val()
				}),
			timeout:3000,
			dataType: "json",
			success:
				function(data){
					$.jGrowl(data[0],{theme: data[1]});
				}
		});
	};

	$("#translit").click(function(){
		$.ajax({
			beforeSend: function(){
				$("#checkResult").html('');
				},
			url:'index.php',
			data: ({
				action: 'translit',
				'do': 'docs',
				cp: '<?php echo $this->_tpl_vars['sess']; ?>
',
				alias: $("#document_alias").val(),
				title: $("#doc_title").val(),
				prefix: '<?php echo $this->_tpl_vars['document']->rubric_url_prefix; ?>
'
				}),
			timeout:3000,
			success: function(data){
				$("#document_alias").val(data);
				check();
				}
		});
	});

	$("#document_alias").change(function(){
		if ($("#document_alias").val()!='') check();
	});

	$("#loading")
		.bind("ajaxSend", function(){$.alerts._overlay('show')})
		.bind("ajaxComplete", function(){$.alerts._overlay('hide')}
	);

	<?php if ($_REQUEST['feld'] != ''): ?>
		$("#feld_<?php echo ((is_array($_tmp=$_REQUEST['feld'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
").css({
			'border' : '2px solid red',
			'font' : '120% verdana,arial',
			'background' : '#ffffff'
		});
	<?php endif; ?>

	$('#document_published').datetimepicker({
		changeMonth: true,
		changeYear: true,
		stepHour: 1,
		stepMinute: 1,

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
		}
	});

	$('#document_expire').datetimepicker({
		changeMonth: true,
		changeYear: true,

		stepHour: 1,
		stepMinute: 1,

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

	$(".linkSelect").change(function() {
		var link = $(this).val();
		var parent = $(this).find(' option:selected').attr("data-id");
		<?php if ($this->_tpl_vars['document']->rubric_url_prefix == ""): ?>
			$("#document_alias").val(link);
		<?php else: ?>
			$("#document_alias").val(link+'/<?php echo $this->_tpl_vars['document']->rubric_url_prefix; ?>
');
		<?php endif; ?>
		$("#document_parent").val(parent);
		return false;
	});

	$("#document_meta_keywords").autocomplete("index.php?do=docs&action=keywords&ajax=run&cp=<?php echo $this->_tpl_vars['sess']; ?>
", {
		max: 20,
		width: 300,
		highlight: false,
		multiple: true,
		multipleSeparator: ", ",
		autoFill: true,
		scroll: true,
		scrollHeight: 180
	});

$('#document_lang').change(function() {
	var defaultLang = '<?php echo $_SESSION['accept_langs'][@DEFAULT_LANGUAGE]; ?>
';
	var lang = $('#document_lang option:selected').val();
	var alias = $('#document_alias').val().split('/');
	var languages = [];

	$('#document_lang option').each(function(){
		languages.push($(this).attr('value'));
	});

	if ($.inArray(alias[0], languages) > -1) {
		alias.splice(0, 1);
	}

	if ((lang == defaultLang)||(lang == "<?php echo $this->_config[0]['vars']['DOC_LANG_NONE']; ?>
")) {
		$('#document_alias').val(alias.join('/'));
	} else {
		if (alias[0] != "") {
			console.log(alias);
			$('#document_alias').val(lang + '/' + alias.join('/'));
		} else {
			$('#document_alias').val(lang);
		}
	}
});

	$('#lang_block').hide();
	$('#show_lang').click(function(event) {
		event.preventDefault();
		$('#lang_block').show();
		$('#show_lang').hide();
	});

});

</script>

<?php if ($_REQUEST['action'] == 'edit'): ?>
	<div class="title">
		<h5><?php echo $this->_config[0]['vars']['DOC_EDIT_DOCUMENT']; ?>
</h5>
		<div class="lang">
		<?php $_from = $_SESSION['accept_langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
			<?php if ($this->_tpl_vars['document']->lang_pack[$this->_tpl_vars['lang_id']] > ''): ?>
				<a href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/index.php?do=docs&action=edit&Id=<?php echo $this->_tpl_vars['document']->lang_pack[$this->_tpl_vars['lang_id']]['Id']; ?>
"><img src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/flags/<?php echo $this->_tpl_vars['lang_id']; ?>
.png" alt="<?php echo $this->_tpl_vars['lang_id']; ?>
" /></a>
			<?php else: ?>
				<a class="icon_off" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/index.php?do=docs&action=new&lang_pack=<?php echo $this->_tpl_vars['document']->Id; ?>
&rubric_id=<?php echo $this->_tpl_vars['document']->rubric_id; ?>
&lang=<?php echo $this->_tpl_vars['lang_id']; ?>
"><img src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/flags/<?php echo $this->_tpl_vars['lang_id']; ?>
.png" alt="<?php echo $this->_tpl_vars['lang_id']; ?>
" /></a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
<?php elseif ($_REQUEST['action'] == 'copy'): ?>
	<div class="title"><h5><?php echo $this->_config[0]['vars']['DOC_COPY_DOCUMENT']; ?>
</h5></div>
<?php else: ?>
	<div class="title"><h5><?php echo $this->_config[0]['vars']['DOC_ADD_DOCUMENT']; ?>
</h5>
		<div class="lang">
		<?php $_from = $_SESSION['accept_langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
			<?php if ($this->_tpl_vars['document']->lang_pack[$this->_tpl_vars['lang_id']] > ''): ?>
				<a href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/index.php?do=docs&action=edit&Id=<?php echo $this->_tpl_vars['document']->lang_pack[$this->_tpl_vars['lang_id']]['Id']; ?>
"><img src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/flags/<?php echo $this->_tpl_vars['lang_id']; ?>
.png" alt="<?php echo $this->_tpl_vars['lang_id']; ?>
" /></a>
			<?php else: ?>
				<a class="icon_off" href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
admin/index.php?do=docs&action=new&rubric_id=<?php echo $this->_tpl_vars['document']->rubric_id; ?>
&lang=<?php echo $this->_tpl_vars['lang_id']; ?>
"><img src="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
lib/flags/<?php echo $this->_tpl_vars['lang_id']; ?>
.png" alt="<?php echo $this->_tpl_vars['lang_id']; ?>
" /></a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
<?php endif; ?>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><a href="index.php?do=docs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_SUB_TITLE']; ?>
</a></li>
			<?php if ($_REQUEST['action'] == 'edit'): ?>
				<li><?php echo $this->_config[0]['vars']['DOC_EDIT_DOCUMENT']; ?>
</li>
				<li><strong><?php echo $this->_config[0]['vars']['DOC_IN_RUBRIK']; ?>
</strong> &gt; <?php echo ((is_array($_tmp=$this->_tpl_vars['document']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
				<li><strong class="code"><a href="<?php echo $this->_tpl_vars['document']->document_alias_breadcrumb; ?>
" target="_blank"><?php if ($this->_tpl_vars['document']->document_title != ""): ?><?php echo $this->_tpl_vars['document']->document_title; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['DOC_SHOW3_TITLE']; ?>
<?php endif; ?></a></strong></li>
			<?php else: ?>
				<li><?php echo $this->_config[0]['vars']['DOC_ADD_DOCUMENT']; ?>
</li>
				<li><strong><?php echo $this->_config[0]['vars']['DOC_IN_RUBRIK']; ?>
</strong> &gt; <?php echo ((is_array($_tmp=$this->_tpl_vars['document']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
				<li><strong class="code"><?php if ($_REQUEST['document_title'] != ""): ?><?php echo $_REQUEST['document_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['DOC_IN_NEW']; ?>
<?php endif; ?></strong></li>
			<?php endif; ?>
		</ul>
	</div>
</div>


<form method="post" name="formDocOption" action="<?php echo $this->_tpl_vars['document']->formaction; ?>
" enctype="multipart/form-data" class="mainForm" id="formDoc">
<input class="mousetrap" name="closeafter" type="hidden" id="closeafter" value="<?php echo $_REQUEST['closeafter']; ?>
">
<div class="widget first">
	<div class="head <?php if ($_REQUEST['action'] == 'edit'): ?>closed<?php endif; ?>">
		<h5><?php echo $this->_config[0]['vars']['DOC_OPTIONS']; ?>
 <?php if ($_REQUEST['action'] == 'edit'): ?> (id: <?php echo $_REQUEST['Id']; ?>
)<?php endif; ?></h5>
	</div>

		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
		<col width="250">
		<col>
		<tbody>

		<tr class="noborder">
			<td><?php echo $this->_config[0]['vars']['DOC_CHOOSE_LANG']; ?>
</td>
			<td colspan="3">
				<select style="width: 100px" name="document_lang" id="document_lang">
						<option value="">&nbsp;</option>
					<?php $_from = $_SESSION['accept_langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
						<option value="<?php echo $this->_tpl_vars['lang_id']; ?>
"<?php if (( $this->_tpl_vars['document']->document_lang == $this->_tpl_vars['lang_id'] ) || ( $this->_tpl_vars['document']->document_lang == '' && @DEFAULT_LANGUAGE == $this->_tpl_vars['lang_id'] ) || ( $_REQUEST['lang'] == $this->_tpl_vars['lang_id'] )): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
					</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_NAME']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_META_TITLE']; ?>
">[?]</a></td>
			<td colspan="3"><div class="pr12"><input class="mousetrap" name="doc_title" type="text" id="doc_title" size="40" value="<?php if ($_REQUEST['action'] == 'edit'): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['document']->document_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$_REQUEST['document_title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php endif; ?>" /></div></td>
		</tr>

		<?php if (( $_REQUEST['Id'] == 1 || $_REQUEST['Id'] == $this->_tpl_vars['PAGE_NOT_FOUND_ID'] ) && $_REQUEST['action'] != 'new'): ?>
			<?php $this->assign('dis', 'disabled'); ?>
		<?php endif; ?>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_URL']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_URL_INFO']; ?>
">[?]</a></td>
			<td nowrap="nowrap" colspan="3">
				<div class="pr12">
					<input class="mousetrap" name="prefix" type="hidden" value="<?php echo $this->_tpl_vars['document']->rubric_url_prefix; ?>
">
					<input class="mousetrap" autocomplete="off" name="document_alias" <?php echo $this->_tpl_vars['dis']; ?>
 type="text" id="document_alias" size="60" style="float: left; width: 100%;" value="<?php if ($_REQUEST['action'] == 'edit' || $this->_tpl_vars['document']->document_alias != ''): ?><?php echo $this->_tpl_vars['document']->document_alias; ?>
<?php else: ?><?php echo $this->_tpl_vars['document']->rubric_url_prefix; ?>
<?php endif; ?>" />
						<span class="span-form" style="padding-left: 10px;">
							<?php if ($_REQUEST['Id'] != 1 && $_REQUEST['Id'] != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
							<input type="button" class="basicBtn" id="translit" value="<?php echo $this->_config[0]['vars']['DOC_ALIAS_CREATE']; ?>
" />
							<?php endif; ?>
							<?php if ($_REQUEST['Id'] && $_REQUEST['Id'] != $this->_tpl_vars['PAGE_NOT_FOUND_ID']): ?>
							<a data-dialog="aliases-<?php echo $_REQUEST['Id']; ?>
" href="index.php?do=docs&action=aliases_doc&doc_id=<?php echo $_REQUEST['Id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
&pop=1&onlycontent=1" data-height="650" data-modal="true" data-title="История алисов документа" class="openDialog button greenBtn">История</a>
							<?php endif; ?>
						</span>
				</div>
				<span id="loading" style="display:none"></span>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_URL_LOG']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_URL_LOG_T']; ?>
">[?]</a></td>
			<td nowrap="nowrap" colspan="3">
				<div class="pr12">
					<select style="width: 300px" name="document_alias_history" id="document_alias_history">
						<option value="0"<?php if ($this->_tpl_vars['document']->document_alias_history == '0'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_URL_LOG_RUBRIC']; ?>
</option>
						<option value="1"<?php if ($this->_tpl_vars['document']->document_alias_history == '1'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_URL_LOG_USE']; ?>
</option>
						<option value="2"<?php if ($this->_tpl_vars['document']->document_alias_history == '2'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_URL_LOG_NOTUSE']; ?>
</option>
					</select>
				</div>
			</td>
		</tr>

		<?php if ($this->_tpl_vars['document_alias']): ?>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_URL_LINK']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_USE_RUB_ALIAS']; ?>
">[?]</a></td>
			<td nowrap="nowrap" colspan="3">
				<div class="alias">
					<?php $_from = $this->_tpl_vars['document_alias']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
						<div>&nbsp;<?php echo $this->_tpl_vars['k']; ?>
:</div>
						<div style="margin:2px 0 3px;">
							<select class="linkSelect" style="width: 300px;">
								<option value="" data-id="" selected="selected"><?php echo $this->_config[0]['vars']['DOC_LINK_CHOOSE']; ?>
</option>
								<?php unset($this->_sections['nov']);
$this->_sections['nov']['name'] = 'nov';
$this->_sections['nov']['loop'] = is_array($_loop=$this->_tpl_vars['v']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nov']['show'] = true;
$this->_sections['nov']['max'] = $this->_sections['nov']['loop'];
$this->_sections['nov']['step'] = 1;
$this->_sections['nov']['start'] = $this->_sections['nov']['step'] > 0 ? 0 : $this->_sections['nov']['loop']-1;
if ($this->_sections['nov']['show']) {
    $this->_sections['nov']['total'] = $this->_sections['nov']['loop'];
    if ($this->_sections['nov']['total'] == 0)
        $this->_sections['nov']['show'] = false;
} else
    $this->_sections['nov']['total'] = 0;
if ($this->_sections['nov']['show']):

            for ($this->_sections['nov']['index'] = $this->_sections['nov']['start'], $this->_sections['nov']['iteration'] = 1;
                 $this->_sections['nov']['iteration'] <= $this->_sections['nov']['total'];
                 $this->_sections['nov']['index'] += $this->_sections['nov']['step'], $this->_sections['nov']['iteration']++):
$this->_sections['nov']['rownum'] = $this->_sections['nov']['iteration'];
$this->_sections['nov']['index_prev'] = $this->_sections['nov']['index'] - $this->_sections['nov']['step'];
$this->_sections['nov']['index_next'] = $this->_sections['nov']['index'] + $this->_sections['nov']['step'];
$this->_sections['nov']['first']      = ($this->_sections['nov']['iteration'] == 1);
$this->_sections['nov']['last']       = ($this->_sections['nov']['iteration'] == $this->_sections['nov']['total']);
?>
								<option value="<?php echo $this->_tpl_vars['v'][$this->_sections['nov']['index']]['document_alias']; ?>
" data-id="<?php echo $this->_tpl_vars['v'][$this->_sections['nov']['index']]['Id']; ?>
"><?php if ($this->_tpl_vars['v'][$this->_sections['nov']['index']]['document_breadcrum_title']): ?><?php echo $this->_tpl_vars['v'][$this->_sections['nov']['index']]['document_breadcrum_title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['v'][$this->_sections['nov']['index']]['document_title']; ?>
<?php endif; ?></option>
								<?php endfor; endif; ?>
							</select>
							<div class="fix"></div>
						</div>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</td>
		</tr>
		<?php endif; ?>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_META_KEYWORDS']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_META_KEYWORDS_INFO']; ?>
">[?]</a></td>
			<td colspan="3">
				<div class="pr12">
				<textarea class="mousetrap" style="width:100%; height:40px" name="document_meta_keywords" id="document_meta_keywords"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['document']->document_meta_keywords)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_META_DESCRIPTION']; ?>
&nbsp;<a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_META_DESCRIPTION_INFO']; ?>
">[?]</a></td>
			<td colspan="3">
				<div class="pr12">
				<textarea class="mousetrap" style="width:100%; height:40px" name="document_meta_description" id="document_meta_description" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['document']->document_meta_description)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_INDEX_TYPE']; ?>
</td>
			<td colspan="3">
				<select style="width:300px" name="document_meta_robots" id="document_meta_robots">
					<option value="index,follow"<?php if ($this->_tpl_vars['document']->document_meta_robots == 'index,follow'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_INDEX_FOLLOW']; ?>
</option>
					<option value="index,nofollow"<?php if ($this->_tpl_vars['document']->document_meta_robots == 'index,nofollow'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_INDEX_NOFOLLOW']; ?>
</option>
					<option value="noindex,nofollow"<?php if ($this->_tpl_vars['document']->document_meta_robots == 'noindex,nofollow'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_NOINDEX_NOFOLLOW']; ?>
</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_SITEMAP_FREQ']; ?>
 <a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_SITEMAP_FREQ_DOC']; ?>
">[?]</a></td>
			<td>
				<select name="document_sitemap_freq" id="document_sitemap_freq" style="width: 250px">
					<option value="0"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '0'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_ALWAYS']; ?>
</option>
					<option value="1"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '1'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_HOURLY']; ?>
</option>
					<option value="2"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '2'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_DAILY']; ?>
</option>
					<option value="3"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '3' || $this->_tpl_vars['document']->document_sitemap_freq == ''): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_WEEKLY']; ?>
</option>
					<option value="4"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '4'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_MONTHLY']; ?>
</option>
					<option value="5"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '5'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_YEARLY']; ?>
</option>
					<option value="6"<?php if ($this->_tpl_vars['document']->document_sitemap_freq == '6'): ?> selected="selected"<?php endif; ?>><?php echo $this->_config[0]['vars']['DOC_SITEMAP_NEVER']; ?>
</option>
				</select>
			</td>
			<td><?php echo $this->_config[0]['vars']['DOC_SITEMAP_PRIORITY']; ?>
 <a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_SITEMAP_PRIORITY_DOC']; ?>
">[?]</a></td>
			<td>
				<select name="document_sitemap_pr" id="document_sitemap_pr" style="width: 250px">
					<option value="0"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0'): ?> selected="selected"<?php endif; ?>>0 <?php echo $this->_config[0]['vars']['DOC_SITEMAP_PRIORITY_LOW']; ?>
</option>
					<option value="0.1"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.1'): ?> selected="selected"<?php endif; ?>>0.1</option>
					<option value="0.2"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.2'): ?> selected="selected"<?php endif; ?>>0.2</option>
					<option value="0.3"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.3'): ?> selected="selected"<?php endif; ?>>0.3</option>
					<option value="0.4"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.4'): ?> selected="selected"<?php endif; ?>>0.4</option>
					<option value="0.5"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.5' || $this->_tpl_vars['document']->document_sitemap_pr == ''): ?> selected="selected"<?php endif; ?>>0.5 <?php echo $this->_config[0]['vars']['DOC_SITEMAP_PRIORITY_MID']; ?>
</option>
					<option value="0.6"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.6'): ?> selected="selected"<?php endif; ?>>0.6</option>
					<option value="0.7"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.7'): ?> selected="selected"<?php endif; ?>>0.7</option>
					<option value="0.8"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.8'): ?> selected="selected"<?php endif; ?>>0.8</option>
					<option value="0.9"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '0.9'): ?> selected="selected"<?php endif; ?>>0.9</option>
					<option value="1"<?php if ($this->_tpl_vars['document']->document_sitemap_pr == '1'): ?> selected="selected"<?php endif; ?>>1 <?php echo $this->_config[0]['vars']['DOC_SITEMAP_PRIORITY_HIG']; ?>
</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_START_PUBLICATION']; ?>
</td>
			<td>
				<input class="mousetrap" <?php echo $this->_tpl_vars['dis']; ?>
 id="document_published" name="document_published" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['document']->document_published)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
" style="width: 150px;" />
			</td>

			<td><?php echo $this->_config[0]['vars']['DOC_END_PUBLICATION']; ?>
</td>
			<td>
				<input class="mousetrap" <?php echo $this->_tpl_vars['dis']; ?>
 id="document_expire" name="document_expire" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['document']->document_expire)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y %H:%M") : smarty_modifier_date_format($_tmp, "%d.%m.%Y %H:%M")); ?>
" style="width: 150px;" />
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_CAN_SEARCH']; ?>
</td>
			<td colspan="3"><input name="document_in_search" type="checkbox" id="document_in_search" value="1" <?php if ($this->_tpl_vars['document']->document_in_search == 1 || $_REQUEST['action'] == 'new'): ?>checked<?php endif; ?> /><label> </label></td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_STATUS']; ?>
</td>
			<td colspan="3">
				<?php if ($_REQUEST['action'] == 'new'): ?>
					<?php if ($this->_tpl_vars['document']->dontChangeStatus == 1): ?>
						<?php $this->assign('sel_1', ''); ?>
						<?php $this->assign('sel_2', 'selected="selected"'); ?>
					<?php else: ?>
						<?php $this->assign('sel_1', 'selected="selected"'); ?>
						<?php $this->assign('sel_2', ''); ?>
					<?php endif; ?>
				<?php else: ?>
					<?php if ($this->_tpl_vars['document']->document_status == 1): ?>
						<?php $this->assign('sel_1', 'selected="selected"'); ?>
						<?php $this->assign('sel_2', ''); ?>
					<?php else: ?>
						<?php $this->assign('sel_1', ''); ?>
						<?php $this->assign('sel_2', 'selected="selected"'); ?>
					<?php endif; ?>
				<?php endif; ?>
				<select style="width: 200px" name="document_status" id="document_status"<?php if ($this->_tpl_vars['document']->dontChangeStatus == 1): ?> disabled="disabled"<?php endif; ?>>
					<option value="1" <?php echo $this->_tpl_vars['sel_1']; ?>
><?php echo $this->_config[0]['vars']['DOC_STATUS_ACTIVE']; ?>
</option>
					<option value="0" <?php echo $this->_tpl_vars['sel_2']; ?>
><?php echo $this->_config[0]['vars']['DOC_STATUS_INACTIVE']; ?>
</option>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_USE_NAVIGATION']; ?>
 <a href="javascript:void(0);" style="cursor:help;" class="rightDir link btext" title="<?php echo $this->_config[0]['vars']['DOC_NAVIGATION_INFO']; ?>
">[?]</a></td>
			<td colspan="3">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'navigation/tree.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_BREADCRUMB_TITLE']; ?>
</td>
			<td colspan="3"><div class="pr12"><input class="mousetrap" name="doc_breadcrum_title" type="text" id="doc_breadcrum_title" size="40" value="<?php if ($_REQUEST['action'] == 'edit'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['document']->document_breadcrum_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>" /></div></td>
		</tr>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_USE_BREADCRUMB']; ?>
</td>
			<td colspan="3">
				<input class="mousetrap" name="document_parent" type="text" id="document_parent" value="<?php echo $this->_tpl_vars['document']->document_parent; ?>
" size="4" maxlength="10" style="width: 50px;" />&nbsp;
					<span class="button basicBtn" onClick="openLinkWinId('document_parent','document_parent');"><?php echo $this->_config[0]['vars']['DOC_BREADCRUMB_BTN']; ?>
</span>
				&nbsp;<?php if ($this->_tpl_vars['document']->parent): ?><?php echo $this->_config[0]['vars']['DOC_BREADCRUMB_WITH']; ?>
 « <a href="<?php echo $this->_tpl_vars['ABS_PATH']; ?>
<?php echo $this->_tpl_vars['document']->parent->document_alias; ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['document']->parent->document_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a> »<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_USE_LANG_PACK']; ?>
</td>
			<td colspan="3">
				<a id="show_lang" class="button basicBtn" href="#">Показать</a>
				<div id="lang_block"><input name="document_lang_group" class="mousetrap" type="text" id="document_lang_group" value="<?php if ($_REQUEST['lang_pack']): ?><?php echo $_REQUEST['lang_pack']; ?>
<?php else: ?><?php echo $this->_tpl_vars['document']->document_lang_group; ?>
<?php endif; ?>" size="4" maxlength="10" style="width: 50px;" /></div>
			</td>
		</tr>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_PROPERTY']; ?>
</td>
			<td colspan="3">
				<input class="mousetrap" <?php echo $this->_tpl_vars['dis']; ?>
 id="document_property" name="document_property" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['document']->document_property)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" readonly style="width: 100%;" />
			</td>
		</tr>
		</tbody>
	</table>
	<div class="fix"></div>
</div>

<div class="widget first">
	<div class="head"><h5><?php echo $this->_config[0]['vars']['DOC_MAIN_CONTENT']; ?>
</h5></div>
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
		<col width="250">
		<col>
		<tbody>
		<?php if ($this->_tpl_vars['document']->fields): ?>
		<?php $_from = $this->_tpl_vars['document']->fields; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['document_field_group']):
?>

			<?php if ($this->_tpl_vars['document']->count_groups > 1): ?>
			<tr class="grey">
				<td colspan="3" class="aligncenter"><h5><?php if ($this->_tpl_vars['document_field_group']['group_title']): ?><?php echo $this->_tpl_vars['document_field_group']['group_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['DOC_FIELD_G_UNKNOW']; ?>
<?php endif; ?></h5></td>
			</tr>
			<?php endif; ?>

			<?php $_from = $this->_tpl_vars['document_field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
			<tr class="field_row_<?php echo $this->_tpl_vars['field']['Id']; ?>
 field_row" id="field_row_<?php echo $this->_tpl_vars['field']['Id']; ?>
">
				<td>
					<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['rubric_field_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>
					<?php if ($this->_tpl_vars['field']['rubric_field_description']): ?>
					<br />
					<small><?php echo $this->_tpl_vars['field']['rubric_field_description']; ?>
</small>
					<?php endif; ?>
				</td>
				<td colspan="2"><?php echo $this->_tpl_vars['field']['result']; ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>

		<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<tr class="field_row">
				<td colspan="2">
					<ul class="messages">
						<li class="highlight yellow"><?php echo $this->_config[0]['vars']['DOC_MAIN_NOCONTENT']; ?>
</li>
					</ul>
				</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>

	<div class="rowElem" id="saveBtn">
		<div class="saveBtn">
			<?php if ($_REQUEST['action'] == 'edit'): ?>
				<div style="float:left">
				<input type="submit" class="basicBtn" name="doc_after" value="<?php echo $this->_config[0]['vars']['DOC_BUTTON_EDIT_DOCUMENT']; ?>
" />
				&nbsp;
				<input type="submit" class="blackBtn SaveEdit" value="<?php echo $this->_config[0]['vars']['DOC_BUTTON_EDIT_DOCUMENT_NEXT']; ?>
" />
				</div>
				<input style="float:right" type="submit" class="greenBtn" value="<?php echo $this->_config[0]['vars']['DOC_DISPLAY_NEW_WINDOW']; ?>
 &raquo;" onClick="window.open('/<?php if ($this->_tpl_vars['document_id'] != 1): ?>index.php?id=<?php echo $_REQUEST['Id']; ?>
<?php endif; ?>','_blank');return false;" />
				<div class="clear"></div>
			<?php else: ?>
				<input type="submit" class="basicBtn" name="doc_after" value="<?php echo $this->_config[0]['vars']['DOC_BUTTON_ADD_DOCUMENT']; ?>
" />
				&nbsp;
				<input type="submit" class="blackBtn SaveEdit" value="<?php echo $this->_config[0]['vars']['DOC_BUTTON_ADD_DOCUMENT_NEXT']; ?>
" />
			<?php endif; ?>
		</div>
	</div>

	<div class="fix"></div>
</div>

<div class="widget first">
<div class="head"><h5><?php echo $this->_config[0]['vars']['DOC_REVISSION']; ?>
</h5></div>
		<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
			<col>
			<col>
		<?php if ($this->_tpl_vars['document']->canDelRev == 1): ?>
			<col width="20">
			<col width="20">
			<col width="20">
		<?php else: ?>
			<col width="60">
		<?php endif; ?>

		<thead>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_REVISSION_DATA']; ?>
</td>
			<td><?php echo $this->_config[0]['vars']['DOC_REVISSION_USER']; ?>
</td>
			<td colspan="3"><?php echo $this->_config[0]['vars']['DOC_ACTIONS']; ?>
</td>
		</tr>
		</thead>
		<tbody>
		<?php if ($this->_tpl_vars['document_rev']): ?>
		<?php $_from = $this->_tpl_vars['document_rev']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['doc_rev']):
?>
			<tr id="<?php echo $this->_tpl_vars['doc_rev']->doc_revision; ?>
">
				<td align="center"><span class="date_text dgrey"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['doc_rev']->doc_revision)) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>
</span></td>
				<td align="center"><?php echo $this->_tpl_vars['doc_rev']->user_id; ?>
</td>
				<td align="center"><a class="topleftDir icon_sprite ico_look" title="<?php echo $this->_config[0]['vars']['DOC_REVISSION_VIEW']; ?>
" href="../?id=<?php echo $this->_tpl_vars['doc_rev']->doc_id; ?>
&revission=<?php echo $this->_tpl_vars['doc_rev']->doc_revision; ?>
" target="_blank"></a></td>
				<?php if ($this->_tpl_vars['document']->canDelRev == 1): ?>
				<td><a class="topleftDir ConfirmRecover icon_sprite ico_copy" title="<?php echo $this->_config[0]['vars']['DOC_REVISSION_RECOVER']; ?>
" dir="<?php echo $this->_config[0]['vars']['DOC_REVISSION_RECOVER']; ?>
" name="<?php echo $this->_config[0]['vars']['DOC_REVISSION_RECOVER_T']; ?>
" href="index.php?do=docs&action=revision_recover&doc_id=<?php echo $this->_tpl_vars['doc_rev']->doc_id; ?>
&revission=<?php echo $this->_tpl_vars['doc_rev']->doc_revision; ?>
&rubric_id=<?php echo $_REQUEST['rubric_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a></td>
				<td><a class="topleftDir ConfirmDeleteRev icon_sprite ico_delete" title="<?php echo $this->_config[0]['vars']['DOC_REVISSION_DELETE']; ?>
" dir="<?php echo $this->_config[0]['vars']['DOC_REVISSION_DELETE']; ?>
" rev="<?php echo $this->_tpl_vars['doc_rev']->doc_revision; ?>
" name="<?php echo $this->_config[0]['vars']['DOC_REVISSION_DELETE_T']; ?>
" href="index.php?do=docs&action=revision_delete&doc_id=<?php echo $this->_tpl_vars['doc_rev']->doc_id; ?>
&revission=<?php echo $this->_tpl_vars['doc_rev']->doc_revision; ?>
&rubric_id=<?php echo $_REQUEST['rubric_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"></a></td>
				<?php endif; ?>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			<tr>
				<td colspan="5">
					<ul class="messages">
						<li class="highlight yellow"><?php echo $this->_config[0]['vars']['DOC_REVISSION_NO_ITEMS']; ?>
</li>
					</ul>
				</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
	<div class="fix"></div>
</div>

</form>

<script language="Javascript" type="text/javascript">

	var sett_options = {
		url: '<?php echo $this->_tpl_vars['document']->formaction; ?>
',
		beforeSubmit: Request,
		dataType: 'json',
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

	function SaveAjax () {
		<?php if ($_SESSION['use_editor'] == '0'): ?>if (CKEDITOR) for(var instanceName in CKEDITOR.instances) CKEDITOR.instances[instanceName].updateElement();<?php endif; ?>
		<?php if ($_REQUEST['action'] == 'edit'): ?>
		$('#formDoc').ajaxSubmit(sett_options);
		<?php else: ?>
		$('#formDoc').submit();
		<?php endif; ?>
	}

	function docLook () {
		<?php if ($_REQUEST['action'] == 'edit'): ?>
		window.open('/<?php if ($_REQUEST['Id'] != 1): ?>index.php?id=<?php echo $_REQUEST['Id']; ?>
<?php endif; ?>','_blank');
		<?php else: ?>
		jAlert('<?php echo $this->_config[0]['vars']['DOC_CTRLO_ALERT']; ?>
','<?php echo $this->_config[0]['vars']['DOC_CTRLO_TIT']; ?>
');
		<?php endif; ?>
	}

	$(document).ready(function(){

		Mousetrap.bind(['ctrl+s', 'command+s'], function(event) {
			event.preventDefault();
			<?php if ($_SESSION['use_editor'] == '0'): ?>if (CKEDITOR) for(var instanceName in CKEDITOR.instances) CKEDITOR.instances[instanceName].updateElement();<?php endif; ?>
			SaveAjax();
			return false;
		});

		$('.SaveEdit').click(function (event) {
			event.preventDefault();
			<?php if ($_SESSION['use_editor'] == '0'): ?>if (CKEDITOR) for(var instanceName in CKEDITOR.instances) CKEDITOR.instances[instanceName].updateElement();<?php endif; ?>
			SaveAjax();
			return false;
		});

		Mousetrap.bind(['ctrl+o', 'meta+o'], function (event) {
			event.preventDefault();
			docLook();
			return false;
		});
<?php if ($_SESSION['use_editor'] == '0'): ?>
	<?php echo '
		window.onload = function(){
			if (CKEDITOR) {
				CKEDITOR.on(\'instanceReady\', function (event) {
					event.editor.setKeystroke(CKEDITOR.CTRL + 83 /*S*/, \'savedoc\');
				});
			}
		}
	'; ?>

<?php endif; ?>
	});
</script>