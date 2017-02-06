<?php
$a =  array('a'=>10 ,'b'=>10,'c'=>5,'d'=>6,'e'=>8);
$max = 0;
$position = array();
foreach ($a as $key => $value) {
	if($max <= $value)
	{
		echo $value;
		if (count($position) == 0)
		{
			array_push($position,$key);
			$max = $value;
		}
		// else
		// {
		// 	for($i = 0;$i < count($position);$i++)
		// 	{
		// 	if ($a[$position[$i]] == $value)
		// 	{
		// 	 	array_push($position,$key);
		// 	 	$max = $value;
		// 	 }
		// 	}

		// }
	
	}
}
// for($i = 0;$i < count($position); $i++)
// {
// 	echo $a[$position];
// }
?>