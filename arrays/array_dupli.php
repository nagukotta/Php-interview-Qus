<?php

$arr=array(1,2,3,4,5,2,3,1);
$qnique=function($a)
{
$q=array();
foreach($a as $ar)
{
foreach($q as $val)
if($val===$ar)
continue 2;
$q[]=$ar;
}
return $q;
};
var_dump($qnique($arr));


?>