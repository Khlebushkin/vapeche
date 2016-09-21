<?php /* Smarty version 2.6.26, created on 2016-09-07 03:45:33
         compiled from Z:/home/vapeche.ru/www/lib/redactor/codemirror/codemirror_editor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'Z:/home/vapeche.ru/www/lib/redactor/codemirror/codemirror_editor.tpl', 33, false),)), $this); ?>
<script type="text/javascript">
var editor<?php echo $this->_tpl_vars['conn_id']; ?>
 = CodeMirror.fromTextArea(document.getElementById('<?php echo $this->_tpl_vars['textarea_id']; ?>
'), {
	extraKeys: {
		'Ctrl-S': function (cm) {
			<?php echo $this->_tpl_vars['ctrls']; ?>

		},
		'Cmd-S': function (cm) {
			<?php echo $this->_tpl_vars['ctrls']; ?>

		},
		'Ctrl-O': function (cm) {
			<?php echo $this->_tpl_vars['ctrlo']; ?>

		},
		'Cmd-O': function (cm) {
			<?php echo $this->_tpl_vars['ctrlo']; ?>

		},
		'Ctrl-Space': 'autocomplete',
		'Cmd-Space': 'autocomplete',
		'F11': function (cm) {
			var codem = $(cm.getWrapperElement());
			if (codem.hasClass('CodeMirror-fullscreen')) $('body').css('overflow','auto');
			else $('body').css('overflow','hidden');
			codem.toggleClass('CodeMirror-fullscreen');
		},
		'Esc': function (cm) {
			$('body').css('overflow','auto');
			$(cm.getWrapperElement()).removeClass('CodeMirror-fullscreen');
		}
	},
	readOnly: <?php if ($this->_tpl_vars['readonly']): ?> true <?php else: ?> false <?php endif; ?>,
	lineNumbers: true,
	lineWrapping: true,
	matchBrackets: true,
	mode: '<?php echo ((is_array($_tmp=@$this->_tpl_vars['mode'])) ? $this->_run_mod_handler('default', true, $_tmp, 'application/x-httpd-php') : smarty_modifier_default($_tmp, 'application/x-httpd-php')); ?>
',
	indentUnit: 4,
	indentWithTabs: true,
	enterMode: 'keep',
	tabMode: 'shift',
	autoCloseTags: true,
	styleActiveLine: true,
	onKeyEvent: function () {
		editor<?php echo $this->_tpl_vars['conn_id']; ?>
.save();
	},
	onChange: function () {
		editor<?php echo $this->_tpl_vars['conn_id']; ?>
.save();
	}
});

editor<?php echo $this->_tpl_vars['conn_id']; ?>
.setSize('<?php echo ((is_array($_tmp=@$this->_tpl_vars['width'])) ? $this->_run_mod_handler('default', true, $_tmp, '100%') : smarty_modifier_default($_tmp, '100%')); ?>
', '<?php echo ((is_array($_tmp=@$this->_tpl_vars['height'])) ? $this->_run_mod_handler('default', true, $_tmp, '400px') : smarty_modifier_default($_tmp, '400px')); ?>
');

function getSelectedRange<?php echo $this->_tpl_vars['conn_id']; ?>
() {
	return {
		from: editor<?php echo $this->_tpl_vars['conn_id']; ?>
.getCursor(true),
		to: editor<?php echo $this->_tpl_vars['conn_id']; ?>
.getCursor(false)
	};
}

function textSelection<?php echo $this->_tpl_vars['conn_id']; ?>
(startTag, endTag) {
	var range = getSelectedRange<?php echo $this->_tpl_vars['conn_id']; ?>
();
	editor<?php echo $this->_tpl_vars['conn_id']; ?>
.replaceRange(startTag + editor<?php echo $this->_tpl_vars['conn_id']; ?>
.getRange(range.from, range.to) + endTag, range.from, range.to)
	editor<?php echo $this->_tpl_vars['conn_id']; ?>
.setCursor(range.from.line, range.from.ch + startTag.length);
	editor<?php echo $this->_tpl_vars['conn_id']; ?>
.save();
}
</script>