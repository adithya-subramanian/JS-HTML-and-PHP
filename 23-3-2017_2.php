<?php
print_r($_FILES['f']['name'])
?>

<html>
<body>
<form action = # method = POST enctype="multipart/form-data">
<input type = "file" name = 'f[]' multiple="multiple">
<input type="submit" name="sub">
</form>
</body>
</html>