
<html>
<head>
<?php
$string = '';
if(isset($_GET['student_name']))
{

$a = $_GET['student_name'];
$student = array(array('name' => 'adithya', 'elective1' => 'PC','elective2' => 'TS','elective3' => 'DM'),
array('name' => 'harshal', 'elective1' => 'PC','elective2' => 'TS','elective3' => 'DM' , 'elective4' => 'CDS'),
array('name' => 'boka', 'elective1' => 'PC','elective1' => 'TS','elective1' => 'MS'),
array('name' => 'yash', 'elective1' => 'CDS','elective2' => 'MS','elective3' => 'PC','elective4' => 'PC'),
array('name' => 'arjit', 'elective1' => 'PC','elective2' => 'TS','elective3' => 'DM', 'elective4' => 'MS','elective5' => 'CDS'));

for($i = 0;$i < count($student);$i++)
{
if($student[$i]["name"] == $a)
{
	foreach($student[$i] as $k => $v)
	{
			$string = $string.$k."=>".$v."\n";
	} 
}
}
}
?>

<script>
</script>
</head>
<body>
<form action = # method = 'GET'>
<input type = 'text' name  = 'student_name'>
<input type = 'submit'>
<p><?php
if(isset($_GET['student_name']))
echo $string ?></p>	
</body>
</html>