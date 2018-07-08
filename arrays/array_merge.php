<?php
$beginning = array("foo","lee");
$end = array('bar',5,99,'hhh');
$result = array_merge((array)$beginning, (array)$end);
print_r($result);
echo "<br>";
array_push($beginning,"raj","lee");

print_r($beginning);


$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
//print_r($stack);

?>
