<?php
$array=array(1,2,2,4,4,1,6,6,4,3,4,2,1,5,6,5,5,"raj");
$uniq=function($a)
{

$q=array();
foreach($a as $arr)
{
foreach($q as $qr)
if($qr===$arr)
continue 2;
$q[]=$arr;
}
return $q;
};

var_dump($uniq($array));

echo "<br/>";

//var_dump($array);


?>