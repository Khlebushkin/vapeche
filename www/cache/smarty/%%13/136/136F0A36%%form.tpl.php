<?php /* Smarty version 2.6.26, created on 2016-09-07 03:45:32
         compiled from templates/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'templates/form.tpl', 14, false),array('modifier', 'default', 'templates/form.tpl', 81, false),)), $this); ?>
<?php if ($_REQUEST['action'] == 'new'): ?>
	<div class="title"><h5><?php echo $this->_config[0]['vars']['TEMPLATES_TITLE_NEW']; ?>
</h5></div>
	<div class="widget" style="margin-top: 0px;"><div class="body"><?php echo $this->_config[0]['vars']['TEMPLATES_WARNING2']; ?>
</div></div>
<?php else: ?>
	<div class="title"><h5><?php echo $this->_config[0]['vars']['TEMPLATES_TITLE_EDIT']; ?>
</h5></div>
	<div class="widget" style="margin-top: 0px;"><div class="body"><?php echo $this->_config[0]['vars']['TEMPLATES_WARNING1']; ?>
</div></div>
<?php endif; ?>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
	    <ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><a href="index.php?do=templates&cp=<?php echo $this->_tpl_vars['sess']; ?>
" title=""><?php echo $this->_config[0]['vars']['TEMPLATES_SUB_TITLE']; ?>
</a></li>
			<li><strong class="code"><?php if ($_REQUEST['template_title']): ?><?php echo ((is_array($_tmp=$_REQUEST['template_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?></strong></li>
	    </ul>
	</div>
</div>

<?php if ($this->_tpl_vars['errors']): ?>
	<div class="first">
		
		<ul class="messages">

			<li class="highlight red">
		<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
		<?php $this->assign('message', $this->_tpl_vars['e']); ?>
			&bull;&nbsp;<?php echo $this->_tpl_vars['message']; ?>
<br />
		<?php endforeach; endif; unset($_from); ?>
			</li>

		</ul>
		
	</div>
<?php endif; ?>

<form name="f_tpl" id="f_tpl" method="post" action="<?php echo $this->_tpl_vars['formaction']; ?>
" class="mainForm">

<div class="widget first">
<div class="head"><h5 class="iFrames"><?php echo $this->_config[0]['vars']['TEMPLATES_TITLE_EDIT']; ?>
</h5></div>

<div class="rowElem noborder">
	<label><?php echo $this->_config[0]['vars']['TEMPLATES_NAME']; ?>
</label>
	<div class="formRight"><input name="template_title" type="text" value="<?php if ($_REQUEST['template_title']): ?><?php echo ((is_array($_tmp=$_REQUEST['template_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->template_title)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?>" maxlength="50" style="width: 250px;" class="mousetrap" /></div>
	<div class="fix"></div>
</div>

</div>

<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>
	<div class="first">
		<ul class="messages">
			<li class="highlight red"><?php echo $this->_config[0]['vars']['TEMPLATES_USE_PHP']; ?>
</li>
		</ul>
	</div>
<?php endif; ?>

<div class="widget first">
<div class="head"><h5 class="iFrames"><?php echo $this->_config[0]['vars']['TEMPLATES_HTML']; ?>
</h5></div>
	<?php if (! check_permission ( 'template_php' )): ?>
	<div class="rowElem">
		<ul class="messages">
			<li class="highlight red aligncenter">
			<?php echo $this->_config[0]['vars']['TEMPLATES_REPORT_PHP_ERR']; ?>

			</li>
		</ul>
		<div class="fix"></div>
	</div>
	<?php endif; ?>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<tbody>
					<tr>
						<td style="width: 200px;"><?php echo $this->_config[0]['vars']['TEMPLATES_TAGS']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['TEMPLATES_HTML']; ?>
</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_THEME_FOLDER']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:theme:',']');">[tag:theme:folder]</a></strong>
						</td>
						<td rowspan="24">
							<textarea <?php echo $this->_tpl_vars['read_only']; ?>
 class="<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>tpl_code_readonly<?php else: ?><?php endif; ?>" wrap="off" style="width:100%; height:100%;" name="template_text" id="template_text"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['row']->template_text)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['prefab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['prefab'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
							<ul class="messages" style="margin-top: 10px;">
								<li class="highlight grey">
									<?php echo $this->_config[0]['vars']['MAIN_CODEMIRROR_HELP']; ?>

								</li>
							</ul>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_PAGENAME']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:sitename]','');">[tag:sitename]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_RUBHEADER']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:rubheader]','');">[tag:rubheader]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_TITLE']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:title]','');">[tag:title]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_KEYWORDS']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:keywords]','');">[tag:keywords]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_DESCRIPTION']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:description]','');">[tag:description]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_INDEXFOLLOW']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:robots]','');">[tag:robots]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_CANONICAL']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:canonical]','');">[tag:canonical]</a></strong>
						</td>
					</tr>
					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_PATH']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:path]','');">[tag:path]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_MEDIAPATH']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:mediapath]','');">[tag:mediapath]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_CSS']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:css:]','');">[tag:css:FFF:P]</a></strong>,&nbsp;&nbsp;
						    <strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_JS']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:js:]','');">[tag:js:FFF:P]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_MAINCONTENT']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:maincontent]','');">[tag:maincontent]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_DOCUMENT']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:document]','');">[tag:document]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_ALIAS']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:alias]','');">[tag:alias]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_PRINTLINK']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:printlink]','');">[tag:printlink]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_HOME']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:home]','');">[tag:home]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_BREADCRUMB']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:breadcrumb]','');">[tag:breadcrumb]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_TEASER']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:teaser:]','');">[tag:teaser:XXX]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_SYSBLOCK']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:sysblock:]','');">[tag:sysblock:XXX]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_NAVIGATION']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:navigation:]','');">[tag:navigation:XXX]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_QUICKFINDER']; ?>
" href="javascript:void(0);" onclick="textSelection('[mod_quickfinder:]','');">[mod_quickfinder:XXX]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_IF_PRINT']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:if_print]\n','\n[/tag:if_print]');">[tag:if_print][/tag:if_print]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_DONOT_PRINT']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:if_notprint]\n','\n[/tag:if_notprint]');">[tag:if_notprint][/tag:if_notprint]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['TEMPLATES_VERSION']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:version]','');">[tag:version]</a></strong>
						</td>
					</tr>

				    <tr>
				    	<td>HTML Tags</td>
				    	<td>
							|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<ol>', '</ol>');"><strong>OL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<ul>', '</ul>');"><strong>UL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<li>', '</li>');"><strong>LI</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<p class=&quot;&quot;>', '</p>');"><strong>P</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<strong>', '</strong>');"><strong>B</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<em>', '</em>');"><strong>I</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<h1>', '</h1>');"><strong>H1</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<h2>', '</h2>');"><strong>H2</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<h3>', '</h3>');"><strong>H3</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<h4>', '</h4>');"><strong>H4</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<h5>', '</h5>');"><strong>H5</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<div class=&quot;&quot; id=&quot;&quot;>', '</div>');"><strong>DIV</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<a href=&quot;&quot; title=&quot;&quot;>', '</a>');"><strong>A</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<img src=&quot;&quot; alt=&quot;&quot; &#047;>', '');"><strong>IMG</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<span>', '</span>');"><strong>SPAN</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<pre>', '</pre>');"><strong>PRE</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('<br &#047;>', '');"><strong>BR</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('\t', '');"><strong>TAB</strong></a>&nbsp;|
				    	</td>
				    </tr>
				</tbody>
			</table>
		<div class="rowElem" id="saveBtn">
			<div class="saveBtn">
		<input type="hidden" name="Id" value="<?php echo $_REQUEST['Id']; ?>
">
		<?php if ($_REQUEST['action'] == 'new'): ?>
			<input class="basicBtn" type="submit" value="<?php echo $this->_config[0]['vars']['TEMPLATES_BUTTON_ADD']; ?>
" />
		<?php else: ?>
			<input class="basicBtn" type="submit" value="<?php echo $this->_config[0]['vars']['TEMPLATES_BUTTON_SAVE']; ?>
" />
		<?php endif; ?>
		<?php echo $this->_config[0]['vars']['TEMPLATES_OR']; ?>

		<?php if ($_REQUEST['action'] == 'edit'): ?>
			<input type="submit" class="blackBtn SaveEdit" name="next_edit" value="<?php echo $this->_config[0]['vars']['TEMPLATES_BUTTON_SAVE_NEXT']; ?>
" />
		<?php else: ?>
			<input type="submit" class="blackBtn" name="next_edit" value="<?php echo $this->_config[0]['vars']['TEMPLATES_BUTTON_ADD_NEXT']; ?>
" />
		<?php endif; ?>
			</div>
		</div>

</div>
</form>
<?php if ($_REQUEST['action'] != 'new'): ?>
	<script language="Javascript" type="text/javascript">
	var sett_options = {
		url: '<?php echo $this->_tpl_vars['formaction']; ?>
',
		dataType: 'json',
		data: { ajax: '1' },
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
		    $("#f_tpl").ajaxSubmit(sett_options);
			return false;
		});

	    $(".SaveEdit").click(function(e){
		    if (e.preventDefault) {
				e.preventDefault();
		    } else {
				// internet explorer
				e.returnValue = false;
		    }
		    $("#f_tpl").ajaxSubmit(sett_options);
			return false;
		});

	});
</script>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_connect']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('textarea_id' => 'template_text','ctrls' => '$("#f_tpl").ajaxSubmit(sett_options);','height' => '720','readonly' => 'true')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('textarea_id' => 'template_text','ctrls' => '$("#f_tpl").ajaxSubmit(sett_options);','height' => '720')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>