<html>
<head>
</head>
<body bgcolor = "<?php echo  $_COOKIE['background'];?>">
<font color = "<?php echo $_COOKIE['foreground']?>">
<p>thi is a fontag</p>
</body>
</html>
<?php
setcookie("background","",time() - 3600);
setcookie("foreground","",time() - 3600);
?>