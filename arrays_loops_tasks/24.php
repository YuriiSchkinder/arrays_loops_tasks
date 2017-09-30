<?php
$a=4555875545;
$a=(string)($a);
$arr=str_split($a);
$i=0;
foreach($arr as $val){
if($val=='5'){
    $i++;
}
}
echo "цифра 5 в числе ".$a." встречается ".$i." раза.";
?>