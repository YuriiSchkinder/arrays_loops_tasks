<?php
$i=1;
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($arr as $val){
    if($i==count($arr)){
       echo $val;
    }else{
echo $val.",<br>";
    }
    $i++;
}
?>