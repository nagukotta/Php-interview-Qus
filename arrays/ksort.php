<?php

$arr=array("a"=>"abcd","c"=>"cdba","b"=>"efgh","d"=>"lmno");
krsort($arr);
foreach($arr as $array)
{
echo "<pre>";
print_r($array);
}

?>