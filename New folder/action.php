<?php
    $name="Aayush";
    $pass="9841379888";
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($name==$username && $password==$pass){
        header("Location: http://localhost/Aayush-BIM4th/New%20folder/auth.html");
        exit;
    }
    header("Location: http://localhost/Aayush-BIM4th/New%20folder/form.html")
?>