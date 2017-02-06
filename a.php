<?php
echo "hello";
echo $_GET['t1'];
if($_GET['t1'] == $_GET['t2'])
{
	echo $_GET['t1'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action=# method = 'GET' name = 'p1'>
username:<input type = 'text'  name = 't1'>
password:<input type = 'text'  name = 't2'>
<input type = 'submit' id = 'b1' name = 'b1' value = "submit">
</form>
</body>
</html>