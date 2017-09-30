<?php
$str="125";
$sum=0;
$arr=str_split($str);
foreach($arr as $val){
    if($val>='0'&&$val<='9'){
    $sum+=$val;
    }else{
        echo "Некоректно ведено число";
        $sum='';
        break;
    }
}
echo $sum;
?>