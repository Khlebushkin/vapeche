<?php /* Smarty version 2.6.26, created on 2016-09-11 20:58:37
         compiled from logs/logs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'logs/logs.tpl', 69, false),array('modifier', 'pretty_date', 'logs/logs.tpl', 69, false),)), $this); ?>
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

});

</script>


<div class="title"><h5><?php echo $this->_config[0]['vars']['LOGS_SUB_TITLE']; ?>
</h5></div>

<div class="widget" style="margin-top: 0px;">
	<div class="body">
		<?php echo $this->_config[0]['vars']['LOGS_TIP']; ?>

	</div>
</div>

<div class="breadCrumbHolder module">
	<div class="breadCrumb module">
		<ul>
			<li class="firstB"><a href="index.php" title="<?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
"><?php echo $this->_config[0]['vars']['MAIN_PAGE']; ?>
</a></li>
			<li><?php echo $this->_config[0]['vars']['LOGS_SUB_TITLE']; ?>
</li>
		</ul>
	</div>
</div>

<div class="widget first">
	<ul class="inact_tabs">
		<li class="activeTab"><a href="index.php?do=logs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_TITLE']; ?>
</a></li>
		<li><a href="index.php?do=logs&action=log404&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_404_SUB_TITLE']; ?>
</a></li>
		<li><a href="index.php?do=logs&action=logsql&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['LOGS_SQL_SUB_TITLE']; ?>
</a></li>
	</ul>
	<table cellpadding="0" cellspacing="0" width="100%" class="display" id="dinamTable">
		<col width="2%">
		<col width="8%">
		<col width="10%">
		<col width="10%">
		<col width="70%">
		<thead>
			<tr>
				<th width="5%"><?php echo $this->_config[0]['vars']['LOGS_ID']; ?>
</th>
				<th width="10%"><?php echo $this->_config[0]['vars']['LOGS_IP']; ?>
</th>
				<th width="10%"><?php echo $this->_config[0]['vars']['LOGS_USER']; ?>
</th>
				<th width="15%"><?php echo $this->_config[0]['vars']['LOGS_DATE']; ?>
</th>
				<th width="70%"><?php echo $this->_config[0]['vars']['LOGS_ACTION']; ?>
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
				<td align="center"><?php if (check_permission ( 'user_edit' )): ?><a href="index.php?do=user&action=edit&Id=<?php echo $this->_tpl_vars['log']['log_user_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_tpl_vars['log']['log_user_name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['log']['log_user_name']; ?>
<?php endif; ?></td>
				<td align="center"><span class="date_text dgrey"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['log']['log_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['TIME_FORMAT']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['TIME_FORMAT'])))) ? $this->_run_mod_handler('pretty_date', true, $_tmp) : pretty_date($_tmp)); ?>
</span></td>
				<td>
					<?php echo $this->_tpl_vars['log']['log_text']; ?>

					<div class="clear"></div>
					<span class="code">url:</span> <span class="date_text dgrey"><?php echo $this->_tpl_vars['log']['log_url']; ?>
</span>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		</tbody>
	</table>
	<div class="body aligncenter">
		<?php if (check_permission ( 'logs_clear' )): ?>
		<input href="index.php?do=logs&action=delete&cp=<?php echo $this->_tpl_vars['sess']; ?>
" type="button" class="basicBtn ConfirmLogClear" value="<?php echo $this->_config[0]['vars']['LOGS_BUTTON_DELETE']; ?>
" />
		<?php endif; ?>
		<input onclick="location.href='index.php?do=logs&action=export&cp=<?php echo $this->_tpl_vars['sess']; ?>
'" class="redBtn" type="button" value="<?php echo $this->_config[0]['vars']['LOGS_BUTTON_EXPORT']; ?>
" />
	</div>
</div>