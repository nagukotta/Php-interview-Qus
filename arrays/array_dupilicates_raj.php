<?php ini_set("display_errors","off");
$array=array(1,2,3,4,4,5,3,5,6,8,9,8);

$count = sizeof($array);

for($i=0;$i<$count; $i++){
       
       
       for($j=$i+1;$j<$count;$j++){
               
               //$array[$i].$array[$j];
                                               
               if( $array[$i] === $array[$j]){
                       
                       unset($array[$i]);
               }
               
       
       }
       
       
       
}
echo "<pre>";
print_r($array);

?>