<?php
include("connectiondb.php");//returns $conn
$username=$_POST["username"];
$password=$_POST["password"];
// prevcent mysql injectoin
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  

$checker="select * from employee_info where fullname='$username' and pass='$password'";

$sqloutput=mysqli_query($conn,$checker);
$count=mysqli_num_rows($sqloutput);
if($count==1){
    header("Location: http://localhost/Aayush-BIM4th/New%20folder/homepage.html");
}else{
    echo "wrong";
}
$conn->close();
?>