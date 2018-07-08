 <?php
 ini_set("display_errors","off");
 $array=array(1,1,2,3,4,1,2,3,7,9,4,9);
 
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