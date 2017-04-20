<?php
mysqli_connect("localhost",'root','','temporary');
$result = mysqli_query('temporary',"SELECT * FROM STUDENTS");
while($res = mysqli_fetch_array($result,MYSQLI_NUM))
{
	echo $res[0];
	echo $res[1];
}
?>