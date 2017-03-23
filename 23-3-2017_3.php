<?php
$ext = array("doc","docx");
for($i = 0;$i < count($_FILES['f']['tmp_name'][$i]);$i++)
{
$pathin = pathinfo($_FILES['f']['tmp_name'][$i]);
if(in_array($pathin['extension'],$ext))
{
	echo "valid file";
}
else
{
	echo "invalid file";
}
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