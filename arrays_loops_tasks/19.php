<?php
$arr=['понеділок','вівторок','середа','четверг','пятнеця','субота','неділя'];
$day="субота";
foreach($arr as $val){
    if($val==$day){
        echo "<i>".$val."</i><br>";
    }else{
        echo $val."<br>";
    }
}
?>