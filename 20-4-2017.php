<?php
if(mysqli_connect('localhost','root','','temporary') != NULL)
{
$query = mysqli_query('temporary','SELECT * FROM STUDENTS');
echo $query;
$arr = mysqli_fetch_array($query);
print_r($arr);
}
?>

