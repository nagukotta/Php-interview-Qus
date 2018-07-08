<?php
$array=array('1'=>'a','2'=>'b','3'=>'c','4'=>'d');

sort($array);

foreach($array as $arr)
{
echo "<pre>";
echo $arr;
}

$arr2=array('raj','ram','vamsi','charan');

if(in_array('raj',$arr2))
{
echo "yes";
}
else
{
echo "no";
}

echo "<br/>";
$key=array_search('vamsi',$arr2);
print_r($key);

foreach(range(10,100,20) as $a)
{
echo $a;
}

$arr_sum=array(6,7,9);
$sum=array_sum($arr_sum);
echo $sum;




$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

?>