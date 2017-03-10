<?php
$fp1 = fopen("a.txt",'r');
$fp2 = fopen("c.txt",'w');
while(!feof($fp1))
{
	fwrite($fp2,fread($fp1,5));
}
?>