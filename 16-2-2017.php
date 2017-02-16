<?php
function abc($v)
{
function xyz($a)
{
if($a%10 == 7)
{
return true;
}
        else
        {
                return false;
        } 
}
$b = array();
for($i = 0;$i < count($v);$i++)
{
if(xyz($v[$i]))
{
array_push($b,$v[$i]);
}
}
return $b;
}
$v = array(121,15,167,187,199);
$x = abc($v);
var_dump($x);

?>
