<?php /* Smarty version 2.6.26, created on 2016-09-11 21:02:28
         compiled from documents/form_after.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'documents/form_after.tpl', 49, false),)), $this); ?>
<script language="Javascript" type="text/javascript">
$(document).ready(function(){
	$('#addInNav').hide();
});
</script>

<div class="title"><h5><?php echo $this->_config[0]['vars']['DOC_AFTER_CREATE_TITLE']; ?>
</h5></div>

<div class="widget" style="margin-top: 0px;">
    <div class="body">
		<?php echo $this->_config[0]['vars']['DOC_AFTER_CREATE_INFO']; ?>

    </div>
</div>


<ul id="doclinks" style="padding-left:70px">
	<li><span class="icon_sprite ico_edit floatleft"></span>&nbsp;<a href="index.php?do=docs&action=edit&Id=<?php echo $this->_tpl_vars['document_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_EDIT_THIS_DOCUMENT']; ?>
</a></li>
	<li><span class="icon_sprite ico_look floatleft"></span>&nbsp;<a href="../<?php if ($this->_tpl_vars['document_id'] != 1): ?>index.php?id=<?php echo $this->_tpl_vars['document_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
<?php endif; ?>" target="_blank"><?php echo $this->_config[0]['vars']['DOC_DISPLAY_NEW_WINDOW']; ?>
</a><br /><br /></li>
	<?php if ($this->_tpl_vars['innavi']): ?>
		<li class="navig"><span class="icon_sprite ico_navigation floatleft"></span><a href="javascript:void(0);" onclick="$('#addInNav').toggle();"><?php echo $this->_config[0]['vars']['DOC_INCLUDE_NAVIGATION']; ?>
</a><br /><br /></li>
	<?php endif; ?>
	<li><span class="icon_sprite ico_add floatleft"></span>&nbsp;<a href="index.php?do=docs&action=copy&rubric_id=<?php echo $this->_tpl_vars['rubric_id']; ?>
&Id=<?php echo $this->_tpl_vars['document_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_ADD_COPY_DOCUMENT']; ?>
</a><br /></li>
	<li><span class="icon_sprite ico_add floatleft"></span>&nbsp;<a href="index.php?do=docs&action=new&rubric_id=<?php echo $this->_tpl_vars['rubric_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_ADD_NEW_DOCUMENT']; ?>
</a><br /><br /></li>
	<li><span class="icon_sprite ico_copy floatleft"></span>&nbsp;<a href="index.php?do=docs&rubric_id=<?php echo $this->_tpl_vars['rubric_id']; ?>
&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_CLOSE_WINDOW_RUBRIC']; ?>
</a></li>
	<li><span class="icon_sprite ico_copy floatleft"></span>&nbsp;<a href="index.php?do=docs&cp=<?php echo $this->_tpl_vars['sess']; ?>
"><?php echo $this->_config[0]['vars']['DOC_CLOSE_WINDOW']; ?>
</a></li>
</ul>

<?php if ($this->_tpl_vars['innavi']): ?>
<div id="addInNav" class="first">
	<form method="post" action="index.php" class="mainForm">
		<input type="hidden" name="do" value="docs">
		<input type="hidden" name="action" value="innavi">
		<input type="hidden" name="document_id" value="<?php echo $this->_tpl_vars['document_id']; ?>
">
		<input type="hidden" name="rubric_id" value="<?php echo $this->_tpl_vars['rubric_id']; ?>
">
		<input type="hidden" name="cp" value="<?php echo $this->_tpl_vars['sess']; ?>
">
<div class="widget first">
<div class="head"><h5 class="iFrames"><?php echo $this->_config[0]['vars']['DOC_TO_NAVI_TITLE']; ?>
</h5></div>

	<table cellpadding="0" cellspacing="0" width="100%" class="tableStatic" id="Fields">
		<col width"200"></col>
		<col></col>
		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_ADD_IN_NAVIGATION']; ?>
</td>
			<td nowrap>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'navigation/tree_docform.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<span style="margin: 0 10px"><?php echo $this->_config[0]['vars']['DOC_IN_MENU']; ?>
 -></span>
				<select name="navi_id" style="width: 250px">
					<?php $_from = $this->_tpl_vars['navis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
						<option value="<?php echo $this->_tpl_vars['menu']->id; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['menu']->navi_titel)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_NAVIGATION_POSITION']; ?>
</td>
			<td><input style="width:45px" name="navi_item_position" type="text" value="10" maxlength="4"></td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_NAVIGATION_TITLE']; ?>
</td>
			<td><div class="pr12"><input name="navi_title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['document_title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></div></td>
		</tr>

		<tr>
			<td><?php echo $this->_config[0]['vars']['DOC_TARGET']; ?>
</td>
			<td>
				<select style="width: 150px" name="navi_item_target">
					<option value="_self"><?php echo $this->_config[0]['vars']['DOC_TARGET_SELF']; ?>
</option>
					<option value="_blank"><?php echo $this->_config[0]['vars']['DOC_TARGET_BLANK']; ?>
</option>
				</select>
			</td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" class="basicBtn" value="<?php echo $this->_config[0]['vars']['DOC_BUTTON_ADD_MENU']; ?>
"></td>
		</tr>
	</table>

</div>
	</form>
</div>
<?php endif; ?>