<?php
$array=array(1,2,3,4,5,6,1,2,3,4,5,6,9,10,9);
$count=count($array);

for($i=0; $i<$count; $i++)
{
for($a=$i+1; $a<$count; $a++)
{
if($array[$i]==$array[$a])
{
unset($array[$i]);
}
}
}

var_dump($array);



?>