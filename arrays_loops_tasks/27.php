<?php
$row=5;
$cols=6;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table>";
for($i=1;$i<=$row;$i++){
    echo "<tr>";
    for($j=1;$j<=$cols;$j++){
        $col=$colors[rand(0,(count($colors))-1)];
      echo "<td style='background: $col'>".rand(100,2000)."</td>"  ;
    }
    echo "</tr>";
}
echo "</table>";
?>