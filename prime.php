<?php
for($i = 2;$i <= 100; $i++)
{
	$flag = 0;
	for($j =2;$j < $i ; $j++)
	{
		if($i % $j == 0)
		{
			$flag = 1;
			break;
		}

	}
	if($flag != 1)
	{
		echo $i;

	}
}
?>