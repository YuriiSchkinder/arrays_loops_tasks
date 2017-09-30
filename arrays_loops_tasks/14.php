<?php
$arr=[4, 2, 5, 19, 13, 0, 10];
foreach($arr as $val){
    if($val==2 || $val==3 || $val==4 ) {
        echo "Yes";
        break;
    }else
    {
        echo "No";
        break;
    }
}

?>