<?php
$a = file("a.txt");
$str = "";
for($i =0;$i < count($a);$i = $i + 2)
{
    $str = $str.$a[$i];
    //don't add an PHP_EOL at the end as in the file there is already a EOL placed due to enter in the a.txt file
}
file_put_contents("even.txt",$str);
?>