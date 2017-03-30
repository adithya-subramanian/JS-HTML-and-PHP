<?php
if(isset($_GET['foreground']))
{
	echo 'a';
	setcookie('foreground',$_GET['foreground'],time()+3600);
	setcookie('background',$_GET['background'],time()+3600);
	header("location:30-3-2017_2.php");
}
?>
<html>
<head>
</head>
<body>
<form action = # method = 'GET'>
<input type = 'radio' name = 'foreground' value = 'green'>green
<input type = 'radio' name = 'foreground' value = 'blue'>blue
<input type = 'radio' name = 'foreground' value = 'red'>red<br>
<input type = 'radio' name = 'background' value = 'green'>green
<input type = 'radio' name = 'background' value = 'blue'>blue
<input type = 'radio' name = 'background' value = 'red'>red
<input type = 'submit' value = 'submit'>
</form>
</body>
</html>