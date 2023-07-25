<?php

$one = $_POST['fname'];
$two = $_POST['lname'];
$three = $_POST['phone'];
$four = $_POST['mail'];
$five = $_POST['mess'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tata1";



$conn = mysqli_connect($servername,$username,$password,$dbname);


$mq = mysqli_query($conn,"INSERT INTO contact_student(first_name,last_name,phone_number,email,comment) values ('".$one."','".$two."','".$three."','".$four."','".$five."')");

echo ("<script language='javascript'> window.alert('sent Successfully ...!');
window.location.href='home.php'</script>");


mysqli_close($conn);

?>