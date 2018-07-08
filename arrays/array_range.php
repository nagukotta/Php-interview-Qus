<?php
// array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)
foreach (range(0, 12) as $number) {
    echo $number;
}
echo "<br/>";
// The step parameter was introduced in 5.0.0
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 5) as $number) {
    echo $number;
}
echo "<br/>";
foreach(range(0,50,5) as $nub)
{

echo $nub;
}

echo "</br>";

foreach(range(0,1000,100) as $range)
{
//echo "<pre>";
var_dump($range);
}

?>