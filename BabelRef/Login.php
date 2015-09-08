<html>
<head></head>
<body>
<form name='newForm'>
	<button id="Submit"></button>
</form>

<script type="text/javascript">
//Changed
function OnSubmit(){
	var submitButton = document.getElementById('Submit');
}
</script>

<?php
if (isset($_REQUEST['username']))
	include "Login.php";

$form_name = 'loginform'; 
$script = '<script type="text/javascript">
	function loadPage() { // Sets username input\'s length
	document.'.$form_name.'.username.setAttribute("maxlength", 20);
}
</script>';

if ($_REQUEST['role'] == 'admin')
	$input = "<input name='username' ... blue;' />";
else
	$input = "<input name='username' ... green;' />";

echo '<html><head>
'.$script.'
</head>
<body onload="loadPage();">
<form name="loginform">
<label>Enter your name here:</label>
'.$input.'
<input type="submit" value="Submit" />
</form></body></html>'; ?>
</body>
</html>
