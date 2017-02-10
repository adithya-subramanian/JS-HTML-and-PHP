$k = array(array('name'=>'arjit','marks'=>66),array('name'=>'sethi','marks'=>99));
$max = 101;
for($i = 0;$i < count($k);$i++)
{
foreach($k[$i] as $key => $value)
{
if($key == 'marks')
{
if($max > $k[$i]['marks'])
{
$max = $k[$i]['marks'];
}
}
}
}
echo $max;
