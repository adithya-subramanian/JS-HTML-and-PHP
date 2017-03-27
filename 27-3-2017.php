<?php
if(isset($_GET['t1']))
{
	if(!(isset($_COOKIE['username'])))
	{
		setcookie("username",$_GET['t1'],time()+3600);
		setcookie("password",$_GET['t2'],time()+3600);
	}	
	header("Location: 27-3-2017_2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action = # method="GET">
<input type="text" name="t1">
<input type="text" name="t2">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>