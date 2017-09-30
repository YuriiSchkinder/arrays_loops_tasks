<?php
$arr=['понеділок','вівторок','середа','четверг','пятнеця','субота','неділя'];
foreach($arr as $val){
    if($val=='субота'|| $val=='неділя'){
        echo "<strong>".$val."</strong><br>";
    }else{
        echo $val."<br>";
    }
}
?>