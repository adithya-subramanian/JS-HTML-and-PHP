 
<?php
if(isset($_GET['id']))
{
	$fp = fopen('item.txt','a');
	fprintf($fp,"%s\t%s\t%s\n".PHP_EOL,$_GET['id'],$_GET['name'],$_GET['desc']);
	fclose($fp);
}

if(isset($_GET['id2']))
{
	$fp = fopen("item.txt",'r');
	while(!feof($fp))
	{
		//echo "hello";
		$a = fscanf($fp,"%s\t%s\t%s\n".PHP_EOL);
		//var_dump($a);
		list($b,$c,$d) = $a;
		//echo $c;
		//echo $_GET['id2'];
		if($c == $_GET['id2'])
			echo $d;
			break;
	}
	fclose($fp);
}
?>

<html>
<head>
</head>
<body>
<form action = # method = GET>
item id:<input type = "text" name = 'id'>
item name:<input type = "text" name = 'name'>
item description<input type="text" name="desc">
<input type = 'submit' name = 'b1'>
</form>
<form action = # method = GET>
<input type="text" name="id2">
<input type="submit" name="b2">
</form>
</body>
</html>
