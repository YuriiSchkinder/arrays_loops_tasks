<?php
for($i=0;$i<=10;$i++) {
    $arr[$i] = rand(0, 100);
}
$min=min($arr);
$max=max($arr);
print_r($arr);
foreach($arr as $key=>$val){
    if($val==$max) {
        $kmax = $key;
    }
    if($val==$min){
        $kmin=$key;
    }
}
$arr[$kmin]=$max;
$arr[$kmax]=$min;
print_r($arr);

?>