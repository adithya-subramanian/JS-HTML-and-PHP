
<?php
function abc($a)
{
    $sum = 0;
    for($i = 1;$i < $a;$i++)
    {
        if($a % $i == 0)
        {
        $sum = $sum + $i;
    }
    }
    if($sum == $a)
    {
        echo "perfect number";
        echo $a;
    }
}
for($i = 1;$i < 101;$i++)
{
    abc($i);
}
?>
