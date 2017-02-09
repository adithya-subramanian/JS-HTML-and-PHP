<?php
function abc($a)
{
    $max = 0;
    for($i = 0;$i < count($a);$i++)
    {
        if($max < $a[$i])
        $max = $a[$i];
    }
    echo $max;
}
$b = array();
for($i = 0;$i < 5;$i++)
{
    array_push($b,rand(5,15));
}
abc($b);
print_r($b);
?>

