<?php
$num=array(5,9,7,15,1,12);
$temp=$num[0];
foreach($num as $a){
    if ($a>$temp)
    $temp=$a;
}
echo "The largest number is $temp";
?>