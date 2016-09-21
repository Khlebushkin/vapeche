<?php /* Smarty version 2.6.26, created on 2016-09-11 20:58:24
         compiled from start.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'start.tpl', 78, false),array('modifier', 'escape', 'start.tpl', 78, false),array('modifier', 'date_format', 'start.tpl', 102, false),array('modifier', 'pretty_date', 'start.tpl', 102, false),array('modifier', 'default', 'start.tpl', 188, false),)), $this); ?>
<div class="title">
	<h5><?php echo $this->_config[0]['vars']['MAIN_WELCOME']; ?>
</h5>
</div>

<div class="widgets">
		<?php if (@CHECK_VERSION): ?>
		<ul class="messages first">
			<li class="highlight yellow hidden" id="update">

			<script type="text/javascript">
			$(document).ready(function(){
				$.ajax({
					url: 'http://ave-cms.ru/version.php?jsoncallback=?',
					dataType: "jsonp",
					success: function (data) {
						var current_version = <?php echo @APP_VERSION; ?>
;
						var stable_version = data.version;
						var newstext = data.newstext;
						if (current_version < stable_version) {
							$("#update").removeClass("hidden").html(newstext);
						}
					}
				});
			});
			</script> 

			</li>
		</ul>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['login_menu'] && $this->_tpl_vars['online_users'] > '1'): ?>
		<ul class="messages first">
			<li class="highlight grey"><?php echo $this->_config[0]['vars']['MAIN_USERS_LAST_TIME']; ?>
 
			  <?php $_from = $this->_tpl_vars['online_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['online_users'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['online_users']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['online_users']['iteration']++;
?>
				<a href="index.php?do=user&action=edit&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
" class="topDir link" title="<?php echo $this->_tpl_vars['item']->user_group_name; ?>
"><?php if ($this->_tpl_vars['item']->user_group == '1'): ?><strong><?php echo $this->_tpl_vars['item']->user_name; ?>
</strong><?php else: ?><?php echo $this->_tpl_vars['item']->user_name; ?>
<?php endif; ?></a><?php if (! ($this->_foreach['online_users']['iteration'] == $this->_foreach['online_users']['total'])): ?>, <?php endif; ?>
			  <?php endforeach; endif; unset($_from); ?>
			</li>
		</ul>
		<?php endif; ?>

		<div class="widget">
			<div class="head">
				<h5><?php echo $this->_config[0]['vars']['MAIN_START_DOC_TITLE']; ?>
</h5>
			</div>
			<div class="dataTables_wrapper" id="example_wrapper">
			<div class="">
				<div class="dataTables_filter" id="example_filter">
				<form method="get" id="doc_search" action="index.php">
					<input type="hidden" name="do" value="docs" />
					<input type="hidden" name="rubric_id" value="all" />
				<label><?php echo $this->_config[0]['vars']['MAIN_START_SEARCH']; ?>
 <input type="text" placeholder="<?php echo $this->_config[0]['vars']['MAIN_START_SEARCH_T']; ?>
 " name="QueryTitel" style="width: 350px;"><div class="srch"></div></label>
				</form>
				</div>
			</div>
			<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
				<col width="10" />
				<col />
				<col width="200" />
				<col width="150" />
				<thead>
					<tr>
						<td><?php echo $this->_config[0]['vars']['MAIN_START_DOC_ID']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['MAIN_START_DOC_NAME']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['MAIN_START_DOC_RUBRIC']; ?>
</td>
						<td><?php echo $this->_config[0]['vars']['MAIN_START_DOC_DATE']; ?>
</td>
					</tr>
				</thead>
				<?php $_from = $this->_tpl_vars['doc_start']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<tr <?php if ($this->_tpl_vars['item']->document_deleted == 1): ?>class="red"<?php endif; ?><?php if ($this->_tpl_vars['item']->document_status != 1): ?>class="yellow"<?php endif; ?>>
						<td nowrap="nowrap"><strong><a class="toprightDir" title="<?php echo $this->_config[0]['vars']['MAIN_DOC_SHOW_TITLE']; ?>
" href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?>index.php?id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
<?php endif; ?>" target="_blank"><?php echo $this->_tpl_vars['item']->Id; ?>
</a></strong></td>
						<td>
							<div  class="docaction">
							<?php if ($this->_tpl_vars['item']->cantEdit == 1): ?>
								<?php if ($this->_tpl_vars['item']->rubric_admin_teaser_template != ""): ?>
									<?php echo $this->_tpl_vars['item']->rubric_admin_teaser_template; ?>

								<?php else: ?>
									<strong>
									<a class="docname topDir" title="<?php echo $this->_config[0]['vars']['MAIN_DOC_EDIT_TITLE']; ?>
" href="index.php?do=docs&action=edit&rubric_id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&Id=<?php echo $this->_tpl_vars['item']->Id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
">
										<?php if ($this->_tpl_vars['item']->document_breadcrum_title != ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_breadcrum_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif ($this->_tpl_vars['item']->document_title != ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['MAIN_DOC_SHOW3_TITLE']; ?>
<?php endif; ?>
									</a>
									</strong>
									<br />
									<a href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?><?php echo $this->_tpl_vars['item']->document_alias; ?>
<?php endif; ?>" target="_blank" class="rightDir" title="<?php echo $this->_config[0]['vars']['MAIN_DOC_SHOW2_TITLE']; ?>
"><span class="dgrey doclink"><?php echo $this->_tpl_vars['item']->document_alias; ?>
</span></a>
								<?php endif; ?>
							<?php else: ?>
								<?php if ($this->_tpl_vars['item']->document_breadcrum_title != ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_breadcrum_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php elseif ($this->_tpl_vars['item']->document_title != ""): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo $this->_config[0]['vars']['MAIN_DOC_SHOW3_TITLE']; ?>
<?php endif; ?>
								<br />
								<a href="../<?php if ($this->_tpl_vars['item']->Id != 1): ?><?php echo $this->_tpl_vars['item']->document_alias; ?>
<?php endif; ?>" target="_blank" class="rightDir" title="<?php echo $this->_config[0]['vars']['MAIN_DOC_SHOW2_TITLE']; ?>
"><span class="dgrey doclink"><?php echo $this->_tpl_vars['item']->document_alias; ?>
</span></a>
							<?php endif; ?>
							</div>
						</td>
						<td align="center">
							<?php if (check_permission ( 'rubric_edit' )): ?>
								<a href="index.php?do=rubs&action=edit&Id=<?php echo $this->_tpl_vars['item']->rubric_id; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
" class="link"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
								<br />
								<strong><?php echo $this->_config[0]['vars']['MAIN_START_DOC_AUTOR']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_author)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->rubric_title)) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								<br />
								<strong><?php echo $this->_config[0]['vars']['MAIN_START_DOC_AUTOR']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->document_author)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							<?php endif; ?>
						</td>
						<td align="center"><span class="date_text dgrey"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->document_published)) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>
</span></td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</div>
	</div>
</div>

		<div class="widgets">
			<!-- Left widgets -->
			<div class="oneThree">

				<!-- Statistics -->
				<div class="widget">
					<div class="head">
						<h5><?php echo $this->_config[0]['vars']['MAIN_STAT_SYSTEM_INFO']; ?>
</h5>
					</div>
					<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
						<col width="40%"/>
						<col/>
						<tbody>
							<tr class="noborder">
								<td><?php echo @APP_NAME; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo @APP_VERSION; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_DOMEN']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['domain']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_PHP']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['php_version']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_MYSQL_VERSION']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['mysql_version']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_MYSQL']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['mysql_size']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_CACHE']; ?>
</td>
								<td align="right"><span class="cmsStats" id="cachesize"><a href="javascript:void(0);" class="link" id="cacheShow"><?php echo $this->_config[0]['vars']['MAIN_STAT_CACHE_SHOW']; ?>
</a></span></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>

			<!-- Right widgets -->
			<div class="oneThree">

				<!-- User widget -->
				<div class="widget">
					<div class="head">
						<h5><?php echo $this->_config[0]['vars']['MAIN_STAT']; ?>
</h5>
					</div>
					<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
						<col width="40%"/>
						<col/>
						<tbody>
							<tr class="noborder">
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_DOCUMENTS']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['documents']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_RUBRICS']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['rubrics']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_QUERIES']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['request']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_TEMPLATES']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['templates']; ?>
</span></td>
							</tr>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_MODULES']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['modules_0']+$this->_tpl_vars['cnts']['modules_1']; ?>
</span></td>
							</tr>
							<?php if ($this->_tpl_vars['cnts']['modules_0']): ?>
							<tr>
								<td><span class="ml20 dotted btext"><?php echo $this->_config[0]['vars']['MAIN_STAT_MODULES_OFF']; ?>
</span></td>
								<td align="right"><span class="cmsStatsAlert"><?php echo ((is_array($_tmp=@$this->_tpl_vars['cnts']['modules_0'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span></td>
							</tr>
							<?php endif; ?>
							<tr>
								<td><?php echo $this->_config[0]['vars']['MAIN_STAT_USERS']; ?>
</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['cnts']['users_0']+$this->_tpl_vars['cnts']['users_1']; ?>
</span></td>
							</tr>
							<?php if ($this->_tpl_vars['cnts']['users_0']): ?>
							<tr>
								<td><span class="ml20 dotted btext"><?php echo $this->_config[0]['vars']['MAIN_STAT_USERS_WAIT']; ?>
</span></td>
								<td align="right"><span class="cmsStatsAlert"><?php echo ((is_array($_tmp=@$this->_tpl_vars['cnts']['users_0'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>

			</div>

			<!-- Right widgets -->
			<div class="oneThree">

				<!-- User widget -->
				<div class="widget">
					<div class="head">
						<h5><?php echo $this->_config[0]['vars']['MAIN_LOGS']; ?>
</h5>
					</div>
					<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic">
						<col width="40%"/>
						<col/>
						<tbody>
							<tr class="noborder">
								<td>
									<?php if (check_permission ( 'logs_view' )): ?>
									<a class="link" href="index.php?do=logs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_START_LOGS_LOG']; ?>
</a>
									<?php else: ?>
									<?php echo $this->_config[0]['vars']['MAIN_START_LOGS_LOG']; ?>

									<?php endif; ?>
								</td>
								<td align="right"><span class="cmsStats"><?php echo $this->_tpl_vars['logs']['logs']; ?>
</span></td>
							</tr>
							<tr>
								<td>
									<?php if (check_permission ( 'logs_view' )): ?>
									<a class="link" href="index.php?do=logs&action=log404&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_START_LOGS_404']; ?>
</a>
									<?php else: ?>
									<?php echo $this->_config[0]['vars']['MAIN_START_LOGS_404']; ?>

									<?php endif; ?>
								</td>
								<td align="right"><span <?php if ($this->_tpl_vars['logs']['404'] > 0): ?>class="cmsStatsAlert"<?php else: ?>class="cmsStats"<?php endif; ?>><?php echo $this->_tpl_vars['logs']['404']; ?>
</span></td>
							</tr>
							<tr>
								<td>
									<?php if (check_permission ( 'logs_view' )): ?>
									<a class="link" href="index.php?do=logs&action=logsql&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_START_LOGS_SQL']; ?>
</a>
									<?php else: ?>
									<?php echo $this->_config[0]['vars']['MAIN_START_LOGS_SQL']; ?>

									<?php endif; ?>
								</td>
								<td align="right"><span <?php if ($this->_tpl_vars['logs']['sql'] > 0): ?>class="cmsStatsAlert"<?php else: ?>class="cmsStats"<?php endif; ?>><?php echo $this->_tpl_vars['logs']['sql']; ?>
</span></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		<div class="fix"></div>
		</div>
		<?php if (check_permission ( 'logs_view' )): ?>

		<?php endif; ?>