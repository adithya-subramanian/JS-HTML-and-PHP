<?php
$k = array(array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)),array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)),array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)),array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)),array(rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)))
$max = 0;
for($i = 0;$i < count($k);$i++)
{
for($j = 0;$j < count($k[i]);$j++)
{
if($max < $k[i][j])
{
$max = $k[i][j];
}
}
}
echo $max;
?>

