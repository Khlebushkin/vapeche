$(document).ready(function(){
	$("form.mainForm").jqTransform({imgPath:"../images"});
	$("#captcha img").click(function() { $(this).attr("src", '../inc/captcha.php?refresh=' + new Date().getTime()); });
});