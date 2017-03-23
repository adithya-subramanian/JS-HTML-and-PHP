<?php
$tmp_name = $_FILES["f1"]["tmp_name"];
$name = $_FILES["f1"]["name"];
$dir = "C:\Users\lab1\Desktop\ch";
echo move_uploaded_file($tmp_name,$dir."\\".$name);
$fp = $dir.'\\'.$name;
$f = file_get_contents($fp);
echo $f;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = # method="POST" enctype="multipart/form-data">
<input type="file" name="f1">
<input type = "submit" name = "b1">
</body>
</html>