<?php
    function primechecker($number){
        $count=0;
        for($i=2;$i<=$number/2;$i++){
            if($number%$i==0){
                $count++;
            }
        }
        if($count==0){
            return true;
        }
        return false;
    }
    //up to
    $n=11;
    for($i=1;$i<=$n;$i++){
        if(primechecker($i)){
            echo $i." is prime.<br>";
        }else{
            echo $i." is not prime.<br>";
        }
    }
?>