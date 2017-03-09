<?php
if(isset($_GET['t1']))
{
	$j = 0;
	$a = $_GET['t1'].PHP_EOL.$_GET['p1'].PHP_EOL;
	echo $a;
	$b = $_GET['t1'];
	$fp = fopen('b.txt','r');
	$c = fread($fp,sizeof($fp));
	fclose($fp);
	$fp1 = fopen('b.txt','a');
	if(strlen($c) == 0)
	{
		file_put_contents('b.txt',$a);
	}
	else
	{
		$d = explode(PHP_EOL,$c);
		for($i =0;$i < count($d);$i++)
		{
			if($b == $d[$i])
			{
				$j = 0;
				break;
			}
		}
		if($j != 0)
		{
			fwrite('b.txt',$a);
		}
	}
}
?>
<html>
<head>
</head>
<body>
<form action = # method="GET">
<input type = 'text' name = 't1'>
<input type = 'text' name = 'p1'>
<input type= submit name = 'b1'>
<!--<input type= submit name = 'b2'>-- for multiple submit>
</form>
</body>
</html>