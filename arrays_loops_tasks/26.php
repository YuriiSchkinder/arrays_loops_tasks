<?php
$sum=0;
for($i=0;$i<=10;$i++) {
    $arr[$i] = rand(-10, 10);
}
foreach($arr as $key=>$val){
    if($val>0) {
        if ($key % 2 != 0){
            echo $key."=>".$val."<br>";
        }
    }
}
echo "элементы, которые больше ноля и у которых не парный индекс<br>";

foreach($arr as $key=>$val){
    if($val>0) {
        if ($key % 2 == 0){
            $sum+=$val;
            echo $key."=>".$val."<br>";
        }
    }
}
echo "произведение элементов, которые больше ноля и у которых парные индексы=".$sum;
?>