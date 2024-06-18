<?php
    $nums=array(12,45,21,445,258,63,10);
    $large=$nums[0];
    for($i=1;$i<count($nums);$i++){
        if($large<$nums[$i]){
            $large=$nums[$i];
        }
    }
    echo $large;
?>