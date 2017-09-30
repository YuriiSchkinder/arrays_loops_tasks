<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $key=>$vel){
    $en[]=$key;
    $ru[]=$vel;
}
print_r($ru);
?>