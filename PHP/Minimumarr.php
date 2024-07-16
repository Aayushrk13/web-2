<?php
$num=array(5,9,2,14,7);
$min=$num[0];
foreach($num as $n){
    if($n<$min){
        $min=$n;
    }
}
echo"The minimum value is".$min;
?>