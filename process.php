<?php

$one = $_POST['fname'];
$two = $_POST['lname'];
$three = $_POST['mail'];
$four = $_POST['pass'];
$five =$_POST['city'];
$six = $_POST['st']; 
$seven = $_POST['dist'];
$eight =  $_POST['center'];
$nine = $_POST['zp'];

$ten = $_POST['role'];
$eleven = $_POST['course'];
$twelve = $_POST['technical'];
$thirteen = $_POST['commercial'];
$fourteen = $_POST['tc'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsec";



$conn = mysqli_connect($servername,$username,$password,$dbname);

$hash = password_hash($four,PASSWORD_DEFAULT);

$mq = mysqli_query($conn,"INSERT INTO `tsec_registration`(`first_name`, `last_name`, `email_address`, `password`, `city`, `state`, `district`, `city_center`, `zipcode`, `role`, `course`, `technical`, `commercial`, `t_and_c`) VALUES ('$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen')");

echo ("<script language='javascript'> window.alert('Registration Successfully...!');
window.location.href='login.php'</script>");


mysqli_close($conn);

?>