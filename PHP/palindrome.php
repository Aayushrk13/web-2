<?php
    $str="asdfdsa";
    if($str==strrev($str)){
        echo "$str is palindrome.";
    }else{
        echo "$str is not a palidrome.";
    }
    $num=505;
    $temp=$num;
    $rev=0;
    $rev=0;
    while((int)$num>0){
        $rem=$num%10;
        $rev=$rev*10+$rem;
        $num=$num/10;
    }
    echo "<br>";
    if($temp==$rev){
        echo "$rev is palindrome.";
    }else{
        echo "$temp is not a palindrome.";
    }
?>