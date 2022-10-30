<?php

$i=1;
$j=1;

echo "hitung maju";
while($i <= 20){
    $i++;
    if($i%2==0){
        
echo "<br>".$i;
} 
}

echo "<br>";
echo "hitung mundur";
$g=array(2,4,6,8,10,12,14,16,18,20);
rsort($g);
foreach($g as $g){
    echo "<br>".$g;
}

?>