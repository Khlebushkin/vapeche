<?php /* Smarty version 2.6.26, created on 2016-09-11 21:06:51
         compiled from rubs/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rubs/form.tpl', 9, false),array('modifier', 'default', 'rubs/form.tpl', 120, false),)), $this); ?>
<?php if ($_REQUEST['action'] == 'new'): ?>
<div class="title">
	<h5><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_NEW']; ?>
</h5>
</div>
<?php else: ?>
<div class="title">
	<h5><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_EDIT']; ?>
</h5>
	<div class="num">
		<a class="basicNum" href="index.php?do=rubs&action=edit&Id=<?php echo ((is_array($_tmp=$_REQUEST['Id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['RUBRIK_EDIT']; ?>
</a>
		&nbsp;
		<?php if (check_permission ( 'rubric_code' )): ?>
		<a class="basicNum" href="index.php?do=rubs&action=code&Id=<?php echo ((is_array($_tmp=$_REQUEST['Id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['RUBRIK_EDIT_CODE']; ?>
</a>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>

<div class="widget" style="margin-top: 0px;">
	<div class="body"><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_TIP']; ?>
</div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><a href="index.php?do=rubs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['RUBRIK_SUB_TITLE']; ?>
</a></li>
			<?php if ($_REQUEST['action'] == 'new'): ?>
			<li><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_NEW']; ?>
</li>
			<li><strong class="code"><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong></li>
			<?php else: ?>
			<li><?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_EDIT']; ?>
</li>
			<li><strong class="code"><?php echo ((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong></li>
			<?php endif; ?>
		</ul>
	</div>
</div>

<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>
	<ul class="messages first">
		<li class="highlight red"><?php echo $this->_config[0]['vars']['RUBRIK_PHP_DENIDED']; ?>
</li>
	</ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['errors']): ?>
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
<?php $this->assign('message', $this->_tpl_vars['e']); ?>
	<ul class="messages first">
		<li class="highlight red"><?php echo $this->_tpl_vars['message']; ?>
</li>
	</ul>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<form name="RubricTpl" id="RubricTpl" method="post" action="<?php echo $this->_tpl_vars['formaction']; ?>
" class="mainFrom">

<div class="widget first">

	<ul class="tabs">
		<li class="activeTab">
			<a href="#tab1"><?php echo $this->_config[0]['vars']['RUBRIK_HTML']; ?>
</a>
		</li>
		<li>
			<a href="#tab2"><?php echo $this->_config[0]['vars']['RUBRIK_HTML_2']; ?>
</a>
		</li>
		<li>
			<a href="#tab3"><?php echo $this->_config[0]['vars']['RUBRIK_HTML_3']; ?>
</a>
		</li>
		<li>
			<a href="#tab4"><?php echo $this->_config[0]['vars']['RUBRIK_HTML_4']; ?>
</a>
		</li>
	</ul>

	<div class="tab_container">

		<div id="tab1" class="tab_content" style="display: block;">

			<?php if (! check_permission ( 'rubric_php' )): ?>
			<div class="rowElem">
				<ul class="messages">
					<li class="highlight red aligncenter">
						<?php echo $this->_config[0]['vars']['RUBRIK_PHP_MESSAGE']; ?>

					</li>
				</ul>
				<div class="fix"></div>
			</div>
			<?php endif; ?>

			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="18%" />
				<col width="82%" />
				<thead>
					<tr class="noborder">
						<td><?php echo $this->_config[0]['vars']['RUBRIK_TAGS']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['RUBRIK_HTML_T']; ?>
</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<?php echo $this->_config[0]['vars']['RUBRIK_IFELSE']; ?>

						</td>
						<td>
							|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('[tag:if_notempty:fld:', ']');"><strong>[tag:if_notempty:fld:XXX]</strong></a>
							&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('[tag:if_empty:fld:', ']');"><strong>[tag:if_empty:fld:XXX]</strong></a>
							&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('[tag:if:else]', '');"><strong>[tag:if:else]</strong></a>
							&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('[tag:/if]', '');"><strong>[tag:/if]</strong></a>
							&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection('[tag:if_notempty:fld:XXX]\r\n<?php echo $this->_config[0]['vars']['RUBRIK_IFELSE_1']; ?>
\r\n[tag:if:else]\r\n<?php echo $this->_config[0]['vars']['RUBRIK_IFELSE_2']; ?>
\r\n[tag:/if]', '');"><strong><?php echo $this->_config[0]['vars']['RUBRIK_SAMPLE']; ?>
</strong></a>
							&nbsp;|
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCID_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:docid]', '');"><strong>[tag:docid]</strong></a>
						</td>
						<td rowspan="18">
							<textarea <?php echo $this->_tpl_vars['read_only']; ?>
 class="<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>tpl_code_readonly<?php else: ?><?php endif; ?>" style="width:100%; height:350px" name="rubric_template" id="rubric_template"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['rubric']->rubric_template)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['prefab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['prefab'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
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
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TAG_ALIAS']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:alias]', '');"><strong>[tag:alias]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCDATE_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:docdate]', '');"><strong>[tag:docdate]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCTIME_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:doctime]', '');"><strong>[tag:doctime]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_DATE_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:date:', ']');"><strong>[tag:date:XXX]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:docauthor]', '');"><strong>[tag:docauthor]</strong></a>
						</td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_AVATAR']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection('[tag:docauthoravatar:]', '');">[tag:docauthoravatar:XXX]</a></strong></td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_VIEWS_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:docviews]', '');"><strong>[tag:docviews]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TITLE_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:title]', '');"><strong>[tag:title]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_PATH_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:path]', '');"><strong>[tag:path]</strong></a>
						</td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_LINK_HOME']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection('[tag:home]', '');">[tag:home]</a></strong></td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_MEDIAPATH_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:mediapath]', '');"><strong>[tag:mediapath]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TAG_REQUEST']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:request:]', '');"><strong>[tag:request:XXX]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TAG_SYSBLOCK']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:sysblock:]', '');"><strong>[tag:sysblock:XXX]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TAG_TEASER']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:teaser:]', '');"><strong>[tag:teaser:XXX]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_BREADCRUMB']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:breadcrumb]', '');"><strong>[tag:breadcrumb]</strong></a>
						</td>
					</tr>
					<tr>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_HIDE_INFO']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:hide:', ']\n\n[/tag:hide]');"><strong>[tag:hide:X,X][/tag:hide]</strong></a>
						</td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_THUMBNAIL']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection('[tag:X000x000:[tag:fld:]]', '');">[tag:X000x000:[tag:fld:YYY]]</a></strong></td>
					</tr>

					<tr>
						<td><strong>HTML Tags</strong></td>
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
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="3%" />
				<col width="25%" />
				<col width="10%" />
				<col width="10%" />
				<col width="15%" />
				<col width="48%" />
				<thead>
					<tr>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_NAME']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_TYPE']; ?>
</strong></td>
					</tr>
				</thead>
				<tbody>

					<?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>

					<?php if ($this->_tpl_vars['groups_count'] > 1): ?>
					<tr class="grey">
						<td colspan="6"><h5><?php if ($this->_tpl_vars['field_group']['group_title']): ?><?php echo $this->_tpl_vars['field_group']['group_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_G_UNKNOW']; ?>
<?php endif; ?></h5></td>
					</tr>
					<?php endif; ?>

					<?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
					<tr>
						<td align="center">
							<strong class="code"><?php echo $this->_tpl_vars['field']['Id']; ?>
</strong>
						</td>
						<td>
							<strong><?php echo $this->_tpl_vars['field']['rubric_field_title']; ?>
</strong>
						</td>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:fld:<?php echo $this->_tpl_vars['field']['Id']; ?>
]', '');"><strong>[tag:fld:<?php echo $this->_tpl_vars['field']['Id']; ?>
]</strong></a>
						</td>
						<td>
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection('[tag:fld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
]', '');"><strong>[tag:fld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
]</strong></a>
							<?php endif; ?>
						</td>
						<td align="center">
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?><strong class="code"><?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
</strong><?php endif; ?>
						</td>
						<td>
							<?php unset($this->_sections['field_name']);
$this->_sections['field_name']['name'] = 'field_name';
$this->_sections['field_name']['loop'] = is_array($_loop=$this->_tpl_vars['field_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_name']['show'] = true;
$this->_sections['field_name']['max'] = $this->_sections['field_name']['loop'];
$this->_sections['field_name']['step'] = 1;
$this->_sections['field_name']['start'] = $this->_sections['field_name']['step'] > 0 ? 0 : $this->_sections['field_name']['loop']-1;
if ($this->_sections['field_name']['show']) {
    $this->_sections['field_name']['total'] = $this->_sections['field_name']['loop'];
    if ($this->_sections['field_name']['total'] == 0)
        $this->_sections['field_name']['show'] = false;
} else
    $this->_sections['field_name']['total'] = 0;
if ($this->_sections['field_name']['show']):

            for ($this->_sections['field_name']['index'] = $this->_sections['field_name']['start'], $this->_sections['field_name']['iteration'] = 1;
                 $this->_sections['field_name']['iteration'] <= $this->_sections['field_name']['total'];
                 $this->_sections['field_name']['index'] += $this->_sections['field_name']['step'], $this->_sections['field_name']['iteration']++):
$this->_sections['field_name']['rownum'] = $this->_sections['field_name']['iteration'];
$this->_sections['field_name']['index_prev'] = $this->_sections['field_name']['index'] - $this->_sections['field_name']['step'];
$this->_sections['field_name']['index_next'] = $this->_sections['field_name']['index'] + $this->_sections['field_name']['step'];
$this->_sections['field_name']['first']      = ($this->_sections['field_name']['iteration'] == 1);
$this->_sections['field_name']['last']       = ($this->_sections['field_name']['iteration'] == $this->_sections['field_name']['total']);
?>
								<?php if ($this->_tpl_vars['field']['rubric_field_type'] == $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['id']): ?><?php echo $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['name']; ?>
<?php endif; ?>
							<?php endfor; endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>

					<?php endforeach; endif; unset($_from); ?>

				</tbody>
			</table>

			<div class="fix"></div>

		</div>


		<div id="tab2" class="tab_content" style="display: none;">

			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="18%" />
				<col width="82%" />
				<thead>
					<tr class="noborder">
						<td><?php echo $this->_config[0]['vars']['RUBRIK_TAGS']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['RUBRIK_HTML_T']; ?>
</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_THEME_FOLDER']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:theme:',']');">[tag:theme:folder]</a></strong>
						</td>
						<td rowspan="10" colspan="2"><textarea <?php echo $this->_tpl_vars['read_only']; ?>
 class="<?php if ($this->_tpl_vars['php_forbidden'] == 1): ?>tpl_code_readonly<?php else: ?><?php endif; ?>" style="width:100%; height:200px" name="rubric_header_template" id="rubric_header_template"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['rubric']->rubric_header_template)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['prefab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['prefab'])))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea></td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_PAGENAME']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:sitename]','');">[tag:sitename]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_TITLE']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:title]','');">[tag:title]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_KEYWORDS']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:keywords]','');">[tag:keywords]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_DESCRIPTION']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:description]','');">[tag:description]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_INDEXFOLLOW']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:robots]','');">[tag:robots]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_CSS']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:css:]','');">[tag:css:FFF:P]</a></strong>,&nbsp;&nbsp;
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_JS']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:js:]','');">[tag:js:FFF:P]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_PATH']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:path]','');">[tag:path]</a></strong>
						</td>
					</tr>

					<tr>
						<td>
							<strong><a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATES_MEDIAPATH']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:mediapath]','');">[tag:mediapath]</a></strong>
						</td>
					</tr>
					<tr>
						<td>

						</td>
					</tr>
					<tr>
						<td><strong>HTML Tags</strong></td>
						<td>
							|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<ol>', '</ol>');"><strong>OL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<ul>', '</ul>');"><strong>UL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<li>', '</li>');"><strong>LI</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<p class=&quot;&quot;>', '</p>');"><strong>P</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<strong>', '</strong>');"><strong>B</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<em>', '</em>');"><strong>I</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<h1>', '</h1>');"><strong>H1</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<h2>', '</h2>');"><strong>H2</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<h3>', '</h3>');"><strong>H3</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<h4>', '</h4>');"><strong>H4</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<h5>', '</h5>');"><strong>H5</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<div class=&quot;&quot; id=&quot;&quot;>', '</div>');"><strong>DIV</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<a href=&quot;&quot; title=&quot;&quot;>', '</a>');"><strong>A</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<img src=&quot;&quot; alt=&quot;&quot; &#047;>', '');"><strong>IMG</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<span>', '</span>');"><strong>SPAN</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<pre>', '</pre>');"><strong>PRE</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('<br &#047;>', '');"><strong>BR</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection2('\t', '');"><strong>TAB</strong></a>&nbsp;|
						</td>
					</tr>
				</tbody>
			</table>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="3%" />
				<col width="25%" />
				<col width="15%" />
				<col width="15%" />
				<col width="15%" />
				<col width="38%" />
				<thead>
					<tr>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_NAME']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_TYPE']; ?>
</strong></td>
					</tr>
				</thead>
				<tbody>

					<?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>

					<?php if ($this->_tpl_vars['groups_count'] > 1): ?>
					<tr class="grey">
						<td colspan="6"><h5><?php if ($this->_tpl_vars['field_group']['group_title']): ?><?php echo $this->_tpl_vars['field_group']['group_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_G_UNKNOW']; ?>
<?php endif; ?></h5></td>
					</tr>
					<?php endif; ?>

					<?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
					<tr>
						<td align="center">
							<strong class="code"><?php echo $this->_tpl_vars['field']['Id']; ?>
</strong>
						</td>
						<td>
							<strong><?php echo $this->_tpl_vars['field']['rubric_field_title']; ?>
</strong>
						</td>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][150]</strong></a>
						</td>
						<td>
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection2('[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][0]</strong></a>
							<?php endif; ?>
						</td>
						<td align="center">
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?><strong class="code"><?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
</strong><?php endif; ?>
						</td>
						<td>
							<?php unset($this->_sections['field_name']);
$this->_sections['field_name']['name'] = 'field_name';
$this->_sections['field_name']['loop'] = is_array($_loop=$this->_tpl_vars['field_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_name']['show'] = true;
$this->_sections['field_name']['max'] = $this->_sections['field_name']['loop'];
$this->_sections['field_name']['step'] = 1;
$this->_sections['field_name']['start'] = $this->_sections['field_name']['step'] > 0 ? 0 : $this->_sections['field_name']['loop']-1;
if ($this->_sections['field_name']['show']) {
    $this->_sections['field_name']['total'] = $this->_sections['field_name']['loop'];
    if ($this->_sections['field_name']['total'] == 0)
        $this->_sections['field_name']['show'] = false;
} else
    $this->_sections['field_name']['total'] = 0;
if ($this->_sections['field_name']['show']):

            for ($this->_sections['field_name']['index'] = $this->_sections['field_name']['start'], $this->_sections['field_name']['iteration'] = 1;
                 $this->_sections['field_name']['iteration'] <= $this->_sections['field_name']['total'];
                 $this->_sections['field_name']['index'] += $this->_sections['field_name']['step'], $this->_sections['field_name']['iteration']++):
$this->_sections['field_name']['rownum'] = $this->_sections['field_name']['iteration'];
$this->_sections['field_name']['index_prev'] = $this->_sections['field_name']['index'] - $this->_sections['field_name']['step'];
$this->_sections['field_name']['index_next'] = $this->_sections['field_name']['index'] + $this->_sections['field_name']['step'];
$this->_sections['field_name']['first']      = ($this->_sections['field_name']['iteration'] == 1);
$this->_sections['field_name']['last']       = ($this->_sections['field_name']['iteration'] == $this->_sections['field_name']['total']);
?>
								<?php if ($this->_tpl_vars['field']['rubric_field_type'] == $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['id']): ?><?php echo $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['name']; ?>
<?php endif; ?>
							<?php endfor; endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>

					<?php endforeach; endif; unset($_from); ?>

				</tbody>
			</table>

			<div class="fix"></div>

		</div>


		<div id="tab3" class="tab_content" style="display: none;">

			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="18%" />
				<col width="82%" />
				<thead>
					<tr class="noborder">
						<td><?php echo $this->_config[0]['vars']['RUBRIK_TAGS']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['RUBRIK_HTML_T']; ?>
</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_RUB_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="jAlert('<?php echo $this->_config[0]['vars']['RUBRIK_SELECT_IN_LIST']; ?>
','<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_ITEMS']; ?>
');">[tag:rfld:ID][XXX]</a></strong></td>
						<td rowspan="14"><textarea <?php echo $this->_tpl_vars['dis']; ?>
 name="rubric_teaser_template" id="rubric_teaser_template" wrap="off" style="width:100%; height:340px"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_teaser_template)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCID_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:docid]', '');">[tag:docid]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCTITLE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:doctitle]', '');">[tag:doctitle]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_LINK_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:link]', '');">[tag:link]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCDATE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:docdate]', '');">[tag:docdate]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCTIME_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:doctime]', '');">[tag:doctime]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DATE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:date:', ']');">[tag:date:X]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:docauthor]', '');">[tag:docauthor]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_AVATAR']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:docauthoravatar:]', '');">[tag:docauthoravatar:XXX]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_VIEWS_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:docviews]', '');">[tag:docviews]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_COMMENTS_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:doccomments]', '');">[tag:doccomments]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_PATH']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:path]', '');">[tag:path]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_MEDIAPATH']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:mediapath]', '');">[tag:mediapath]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_THUMBNAIL']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection3('[tag:X000x000:[tag:fld:]]', '');">[tag:X000x000:[tag:fld:YYY]]</a></strong></td>
					</tr>
					<tr>
						<td><strong>HTML Tags</strong></td>
						<td>
							|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<ol>', '</ol>');"><strong>OL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<ul>', '</ul>');"><strong>UL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<li>', '</li>');"><strong>LI</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<p class=&quot;&quot;>', '</p>');"><strong>P</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<strong>', '</strong>');"><strong>B</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<em>', '</em>');"><strong>I</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<h1>', '</h1>');"><strong>H1</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<h2>', '</h2>');"><strong>H2</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<h3>', '</h3>');"><strong>H3</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<h4>', '</h4>');"><strong>H4</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<h5>', '</h5>');"><strong>H5</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<div class=&quot;&quot; id=&quot;&quot;>', '</div>');"><strong>DIV</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<a href=&quot;&quot; title=&quot;&quot;>', '</a>');"><strong>A</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<img src=&quot;&quot; alt=&quot;&quot; &#047;>', '');"><strong>IMG</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<span>', '</span>');"><strong>SPAN</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<pre>', '</pre>');"><strong>PRE</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('<br &#047;>', '');"><strong>BR</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection3('\t', '');"><strong>TAB</strong></a>&nbsp;|
						</td>
					</tr>
				</tbody>
			</table>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="3%" />
				<col width="25%" />
				<col width="10%" />
				<col width="10%" />
				<col width="15%" />
				<col width="48%" />
				<thead>
					<tr>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_NAME']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_TYPE']; ?>
</strong></td>
					</tr>
				</thead>
				<tbody>

					<?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>

					<?php if ($this->_tpl_vars['groups_count'] > 1): ?>
					<tr class="grey">
						<td colspan="6"><h5><?php if ($this->_tpl_vars['field_group']['group_title']): ?><?php echo $this->_tpl_vars['field_group']['group_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_G_UNKNOW']; ?>
<?php endif; ?></h5></td>
					</tr>
					<?php endif; ?>

					<?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
					<tr>
						<td align="center">
							<strong class="code"><?php echo $this->_tpl_vars['field']['Id']; ?>
</strong>
						</td>
						<td>
							<strong><?php echo $this->_tpl_vars['field']['rubric_field_title']; ?>
</strong>
						</td>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection3('[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][150]</strong></a>
						</td>
						<td>
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection3('[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][150]</strong></a>
							<?php endif; ?>
						</td>
						<td align="center">
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?><strong class="code"><?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
</strong><?php endif; ?>
						</td>
						<td>
							<?php unset($this->_sections['field_name']);
$this->_sections['field_name']['name'] = 'field_name';
$this->_sections['field_name']['loop'] = is_array($_loop=$this->_tpl_vars['field_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_name']['show'] = true;
$this->_sections['field_name']['max'] = $this->_sections['field_name']['loop'];
$this->_sections['field_name']['step'] = 1;
$this->_sections['field_name']['start'] = $this->_sections['field_name']['step'] > 0 ? 0 : $this->_sections['field_name']['loop']-1;
if ($this->_sections['field_name']['show']) {
    $this->_sections['field_name']['total'] = $this->_sections['field_name']['loop'];
    if ($this->_sections['field_name']['total'] == 0)
        $this->_sections['field_name']['show'] = false;
} else
    $this->_sections['field_name']['total'] = 0;
if ($this->_sections['field_name']['show']):

            for ($this->_sections['field_name']['index'] = $this->_sections['field_name']['start'], $this->_sections['field_name']['iteration'] = 1;
                 $this->_sections['field_name']['iteration'] <= $this->_sections['field_name']['total'];
                 $this->_sections['field_name']['index'] += $this->_sections['field_name']['step'], $this->_sections['field_name']['iteration']++):
$this->_sections['field_name']['rownum'] = $this->_sections['field_name']['iteration'];
$this->_sections['field_name']['index_prev'] = $this->_sections['field_name']['index'] - $this->_sections['field_name']['step'];
$this->_sections['field_name']['index_next'] = $this->_sections['field_name']['index'] + $this->_sections['field_name']['step'];
$this->_sections['field_name']['first']      = ($this->_sections['field_name']['iteration'] == 1);
$this->_sections['field_name']['last']       = ($this->_sections['field_name']['iteration'] == $this->_sections['field_name']['total']);
?>
								<?php if ($this->_tpl_vars['field']['rubric_field_type'] == $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['id']): ?><?php echo $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['name']; ?>
<?php endif; ?>
							<?php endfor; endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>

					<?php endforeach; endif; unset($_from); ?>

				</tbody>
			</table>

			<div class="fix"></div>

		</div>


		<div id="tab4" class="tab_content" style="display: none;">

			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="18%" />
				<col width="82%" />
				<thead>
					<tr class="noborder">
						<td><?php echo $this->_config[0]['vars']['RUBRIK_TAGS']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['RUBRIK_HTML_T']; ?>
</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_RUB_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="jAlert('<?php echo $this->_config[0]['vars']['RUBRIK_SELECT_IN_LIST']; ?>
','<?php echo $this->_config[0]['vars']['RUBRIK_TEMPLATE_ITEMS']; ?>
');">[tag:rfld:ID][XXX]</a></strong></td>
						<td rowspan="15"><textarea <?php echo $this->_tpl_vars['dis']; ?>
 name="rubric_admin_teaser_template" id="rubric_admin_teaser_template" wrap="off" style="width:100%; height:340px"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rubric']->rubric_admin_teaser_template)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCID_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:docid]', '');">[tag:docid]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCTITLE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:doctitle]', '');">[tag:doctitle]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_LINK_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:link]', '');">[tag:link]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_LINK_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:adminlink]', '');">[tag:adminlink]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCDATE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:docdate]', '');">[tag:docdate]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCTIME_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:doctime]', '');">[tag:doctime]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DATE_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:date:', ']');">[tag:date:X]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:docauthor]', '');">[tag:docauthor]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_DOCAUTHOR_AVATAR']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:docauthoravatar:]', '');">[tag:docauthoravatar:XXX]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_VIEWS_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:docviews]', '');">[tag:docviews]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_COMMENTS_INFO']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:doccomments]', '');">[tag:doccomments]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_PATH']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:path]', '');">[tag:path]</a></strong></td>
					</tr>
					<tr>
						<td><strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_MEDIAPATH']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:mediapath]', '');">[tag:mediapath]</a></strong></td>
					</tr>
					<tr>
						<td>
							<strong><a title="<?php echo $this->_config[0]['vars']['RUBRIK_THUMBNAIL']; ?>
" class="rightDir" href="javascript:void(0);" onclick="textSelection4('[tag:X000x000:[tag:fld:]]', '');">[tag:X000x000:[tag:fld:YYY]]</a></strong>
						</td>
					</tr>
					<tr>
						<td><strong>HTML Tags</strong></td>
						<td>
							|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<ol>', '</ol>');"><strong>OL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<ul>', '</ul>');"><strong>UL</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<li>', '</li>');"><strong>LI</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<p class=&quot;&quot;>', '</p>');"><strong>P</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<strong>', '</strong>');"><strong>B</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<em>', '</em>');"><strong>I</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<h1>', '</h1>');"><strong>H1</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<h2>', '</h2>');"><strong>H2</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<h3>', '</h3>');"><strong>H3</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<h4>', '</h4>');"><strong>H4</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<h5>', '</h5>');"><strong>H5</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<div class=&quot;&quot; id=&quot;&quot;>', '</div>');"><strong>DIV</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<a href=&quot;&quot; title=&quot;&quot;>', '</a>');"><strong>A</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<img src=&quot;&quot; alt=&quot;&quot; &#047;>', '');"><strong>IMG</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<span>', '</span>');"><strong>SPAN</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<pre>', '</pre>');"><strong>PRE</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<br &#047;>', '');"><strong>BR</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('\t', '');"><strong>TAB</strong></a>&nbsp;|&nbsp;
							<a href="javascript:void(0);" onclick="textSelection4('<img src=&quot;[tag:c50x50:[tag:rfld:XXX][img]]&quot; style=&quot;float: left; margin-right: 15px;&quot; alt=&quot;&quot; class=&quot;rounded&quot;/>\r\n<h6>[tag:doctitle]</h6>\r\n[tag:rfld:XXX][-100]\r\n', '');"><strong>Default Teaser</strong></a>&nbsp;|
						</td>
					</tr>
				</tbody>
			</table>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="3%" />
				<col width="25%" />
				<col width="10%" />
				<col width="10%" />
				<col width="15%" />
				<col width="48%" />
				<thead>
					<tr>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_NAME']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ID']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_TAGS_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_ALIAS']; ?>
</strong></td>
						<td align="center"><strong><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_TYPE']; ?>
</strong></td>
					</tr>
				</thead>
				<tbody>

					<?php $_from = $this->_tpl_vars['fields_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_group']):
?>

					<?php if ($this->_tpl_vars['groups_count'] > 1): ?>
					<tr class="grey">
						<td colspan="6"><h5><?php if ($this->_tpl_vars['field_group']['group_title']): ?><?php echo $this->_tpl_vars['field_group']['group_title']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['RUBRIK_FIELD_G_UNKNOW']; ?>
<?php endif; ?></h5></td>
					</tr>
					<?php endif; ?>

					<?php $_from = $this->_tpl_vars['field_group']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
					<tr>
						<td align="center">
							<strong class="code"><?php echo $this->_tpl_vars['field']['Id']; ?>
</strong>
						</td>
						<td>
							<strong><?php echo $this->_tpl_vars['field']['rubric_field_title']; ?>
</strong>
						</td>
						<td>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection4('[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['Id']; ?>
][150]</strong></a>
						</td>
						<td>
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?>
							<a class="rightDir" title="<?php echo $this->_config[0]['vars']['RUBRIK_INSERT_HELP']; ?>
" href="javascript:void(0);" onclick="textSelection4('[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][0]', '');"><strong>[tag:rfld:<?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
][150]</strong></a>
							<?php endif; ?>
						</td>
						<td align="center">
							<?php if ($this->_tpl_vars['field']['rubric_field_alias']): ?><strong class="code"><?php echo $this->_tpl_vars['field']['rubric_field_alias']; ?>
</strong><?php endif; ?>
						</td>
						<td>
							<?php unset($this->_sections['field_name']);
$this->_sections['field_name']['name'] = 'field_name';
$this->_sections['field_name']['loop'] = is_array($_loop=$this->_tpl_vars['field_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['field_name']['show'] = true;
$this->_sections['field_name']['max'] = $this->_sections['field_name']['loop'];
$this->_sections['field_name']['step'] = 1;
$this->_sections['field_name']['start'] = $this->_sections['field_name']['step'] > 0 ? 0 : $this->_sections['field_name']['loop']-1;
if ($this->_sections['field_name']['show']) {
    $this->_sections['field_name']['total'] = $this->_sections['field_name']['loop'];
    if ($this->_sections['field_name']['total'] == 0)
        $this->_sections['field_name']['show'] = false;
} else
    $this->_sections['field_name']['total'] = 0;
if ($this->_sections['field_name']['show']):

            for ($this->_sections['field_name']['index'] = $this->_sections['field_name']['start'], $this->_sections['field_name']['iteration'] = 1;
                 $this->_sections['field_name']['iteration'] <= $this->_sections['field_name']['total'];
                 $this->_sections['field_name']['index'] += $this->_sections['field_name']['step'], $this->_sections['field_name']['iteration']++):
$this->_sections['field_name']['rownum'] = $this->_sections['field_name']['iteration'];
$this->_sections['field_name']['index_prev'] = $this->_sections['field_name']['index'] - $this->_sections['field_name']['step'];
$this->_sections['field_name']['index_next'] = $this->_sections['field_name']['index'] + $this->_sections['field_name']['step'];
$this->_sections['field_name']['first']      = ($this->_sections['field_name']['iteration'] == 1);
$this->_sections['field_name']['last']       = ($this->_sections['field_name']['iteration'] == $this->_sections['field_name']['total']);
?>
								<?php if ($this->_tpl_vars['field']['rubric_field_type'] == $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['id']): ?><?php echo $this->_tpl_vars['field_array'][$this->_sections['field_name']['index']]['name']; ?>
<?php endif; ?>
							<?php endfor; endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>

					<?php endforeach; endif; unset($_from); ?>

				</tbody>
			</table>

			<div class="fix"></div>

		</div>

	</div>

	<div class="fix"></div>

	<div class="rowElem" id="saveBtn">
		<div class="saveBtn">
			<input type="hidden" name="Id" value="<?php echo ((is_array($_tmp=$_REQUEST['Id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input class="basicBtn" type="submit" value="<?php echo $this->_config[0]['vars']['RUBRIK_BUTTON_TPL']; ?>
" />
			<?php echo $this->_config[0]['vars']['RUBRIK_OR']; ?>

			<input type="submit" class="blackBtn SaveEdit" name="next_edit" value="<?php echo $this->_config[0]['vars']['RUBRIK_BUTTON_TPL_NEXT']; ?>
" />
		</div>
	</div>

</div>

</form>

<div class="fix"></div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_connect']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('conn_id' => "",'textarea_id' => 'rubric_template','ctrls' => '$("#RubricTpl").ajaxSubmit(sett_options);','height' => 500)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('conn_id' => '2','textarea_id' => 'rubric_header_template','ctrls' => '$("#RubricTpl").ajaxSubmit(sett_options);','height' => 420)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('conn_id' => '3','textarea_id' => 'rubric_teaser_template','ctrls' => '$("#RubricTpl").ajaxSubmit(sett_options);','height' => 420)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['codemirror_editor']), 'smarty_include_vars' => array('conn_id' => '4','textarea_id' => 'rubric_admin_teaser_template','ctrls' => '$("#RubricTpl").ajaxSubmit(sett_options);','height' => 420)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script language="Javascript" type="text/javascript">

	var sett_options = {
		url: '<?php echo $this->_tpl_vars['formaction']; ?>
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

		Mousetrap.bind(['ctrl+s', 'command+s'], function(event) {
			if (event.preventDefault) {
				event.preventDefault();
			} else {
				// internet explorer
				e.returnValue = false;
			}
			$("#RubricTpl").ajaxSubmit(sett_options);
			return false;
		});

		$(".SaveEdit").click(function(event){
			if (event.preventDefault) {
				event.preventDefault();
			} else {
				// internet explorer
				event.returnValue = false;
			}
			$("#RubricTpl").ajaxSubmit(sett_options);
			return false;
		});

	});
</script>