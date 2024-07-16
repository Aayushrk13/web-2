<?php
$matrix=[[1,2,3],[4,5,6],[7,8,9]];
$largest=$matrix[0][0];
foreach($matrix as $row){
    foreach($row as $element){
    if($element>$largest){
        $largest=$element;
    }
}
}
echo"The largest element in the matrix:".$largest; 
?>