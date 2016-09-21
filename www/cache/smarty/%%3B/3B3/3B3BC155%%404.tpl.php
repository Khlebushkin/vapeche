<?php /* Smarty version 2.6.26, created on 2016-09-11 20:58:29
         compiled from logs/404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'logs/404.tpl', 72, false),array('modifier', 'pretty_date', 'logs/404.tpl', 72, false),array('modifier', 'urldecode', 'logs/404.tpl', 74, false),array('modifier', 'default', 'logs/404.tpl', 80, false),)), $this); ?>
<script language="javascript">
$(document).ready(function(){

	$(".ConfirmLogClear").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		var title = '<?php echo $this->_config[0]['vars']['LOGS_BUTTON_DELETE']; ?>
';
		var confirm = '<?php echo $this->_config[0]['vars']['LOGS_DELETE_CONFIRM']; ?>
';
		jConfirm(
				confirm,
				title,
				function(b){
					if (b){
						window.location = href;
					}
				}
			);
	});

	$(".show_full").click(function(event) {
		event.preventDefault();
		$(this).next('.full_error').slideToggle('fast');
	});

});

</script>


<div class="title"><h5><?php echo $this->_config[0]['vars']['LOGS_404_SUB_TITLE']; ?>
</h5></div>

<div class="widget" style="margin-top: 0px;">
	<div class="body">
		<?php echo $this->_config[0]['vars']['LOGS_404_TIP']; ?>

	</div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><a href="index.php?do=logs&amp;cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_SUB_TITLE']; ?>
</a></li>
			<li><?php echo $this->_config[0]['vars']['LOGS_404_SUB_TITLE']; ?>
</li>
		</ul>
	</div>
</div>

<div class="widget first">
	<ul class="inact_tabs">
		<li><a href="index.php?do=logs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_TITLE']; ?>
</a></li>
		<li class="activeTab"><a href="index.php?do=logs&action=log404&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_404_SUB_TITLE']; ?>
</a></li>
		<li><a href="index.php?do=logs&action=logsql&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_SQL_SUB_TITLE']; ?>
</a></li>
	</ul>
	<table cellpadding="0" cellspacing="0" width="100%" class="display" id="dinamTable">
		<col width="5%">
		<col width="10%">
		<col width="15%">
		<col width="70%">
		<thead>
			<tr>
				<th width="5%"><?php echo $this->_config[0]['vars']['LOGS_404_ID']; ?>
</th>
				<th width="10%"><?php echo $this->_config[0]['vars']['LOGS_404_IP']; ?>
</th>
				<th width="15%"><?php echo $this->_config[0]['vars']['LOGS_404_DATE']; ?>
</th>
				<th width="70%"><?php echo $this->_config[0]['vars']['LOGS_404_ACTION']; ?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['log']):
?>
			<tr class="gradeA">
				<td align="center"><?php echo $this->_tpl_vars['k']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['log']['log_ip']; ?>
</td>
				<td align="center"><span class="date_text dgrey"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log']['log_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>
</span></td>
				<td>
					<strong class="code">REQUEST_URI</strong>: <?php echo ((is_array($_tmp=$this->_tpl_vars['log']['log_request_uri'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>

					<br/>
					<a class="show_full" href="javascript:void(0);">Полная информация об ошибке</a>

					<div class="full_error" style="display: none;">
						<strong class="code">HTTP_USER_AGENT</strong>: <?php echo $this->_tpl_vars['log']['log_user_agent']; ?>
<br/>
						<strong class="code">HTTP_REFERER</strong>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log']['log_user_referer'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'None') : smarty_modifier_default($_tmp, 'None')); ?>
<br/>
						<strong class="code">QUERY_STRING</strong>: <?php echo ((is_array($_tmp=$this->_tpl_vars['log']['log_query'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>

					</div>
				</td>
			</tr>
 		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
		<div class="body aligncenter">
		<?php if (check_permission ( 'logs_clear' )): ?><input href="index.php?do=logs&action=delete404&cp=<?php echo $this->_tpl_vars['sess']; ?>
" type="button" class="basicBtn ConfirmLogClear" value="<?php echo $this->_config[0]['vars']['LOGS_404_BUTTON_DELETE']; ?>
" /><?php endif; ?>
		<input onclick="location.href='index.php?do=logs&action=export404&cp=<?php echo $this->_tpl_vars['sess']; ?>
'" class="redBtn" type="button" value="<?php echo $this->_config[0]['vars']['LOGS_BUTTON_EXPORT_404']; ?>
" />
	</div>
</div>