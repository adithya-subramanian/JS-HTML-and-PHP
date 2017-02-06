<?php
$a = array('name'=>'abc','regno' => '14bce1086','rank'=>1,'cgpa' => 10.0);
foreach ($a as $key => $value) {
	if($key == $_GET['t1'])
	{
		echo 'exists';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action=# method = 'GET' name = 'p1'>
key:<input type = 'text'  name = 't1'>
val:<input type = 'text'  name = 't2'>
<input type = 'submit' id = 'b1' name = 'b1' value = "submit">
</form>
</body>
</html>