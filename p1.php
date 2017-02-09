<?php
function abc(&$a)
{
    $a = $a + 2;
}
$b = 3;
abc($b);
echo $b;
?>

