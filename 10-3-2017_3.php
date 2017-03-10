<?php
$fp = fopen("http://www.vit.ac.in","r");
echo stream_get_contents($fp,-1,-1);
fclose($fp);
?>