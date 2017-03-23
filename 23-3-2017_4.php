<?php
$ext = array("doc","docx");
for($i = 0;$i < count($_FILES['f']['name']);$i++)
{
	//echo $i;
	$temp = explode(".",$_FILES['f']['name'][$i]);
	for($k = 0;$k < count($v);$k++)
	{
		if($temp[1] == $ext[$k])
		{
			echo "valid";
		}
		else
		{
			echo "fails";
		}
	}
	
	//echo $v.'+'.$i;
}
?>

<html>
<body>
<form action = # method = POST enctype="multipart/form-data">
<input type = "file" name = 'f[]' multiple="multiple">
<input type="submit" name="sub">
</form>
</body>
</html>