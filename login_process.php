<?php

$mail = $_POST['email'];
$pass = $_POST['pass'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tata1";


$conn = mysqli_connect($servername, $username, $password, $dbname);


$mail = stripcslashes($mail);
$pass = stripcslashes($pass);
$mail = mysqli_real_escape_string($conn, $mail);
$pass = mysqli_real_escape_string($conn, $pass);

$sql1 = "select * from app1 where Email_address='$mail'";
$result1 = mysqli_query($conn,$sql1);
$count1 = mysqli_num_rows($result1);
    if($count1 == 1){
        $sql2 = "select Pwd from app1 where Email_address='$mail'";
        $result2 = mysqli_query($conn,$sql2);
        $hash= password_hash($pass,PASSWORD_DEFAULT);
                 //Testing to see if am getting the hashed password. 
        if(password_verify($pass,$hash)){
             echo ("<script language='javascript'>window.location.href='../navbar/Theme/index.php'</script>");
        }
        else{
            echo ("<script language='javascript'> window.alert('Password donot Matched...!');
window.location.href='login.php'</script>");
        }
    }
    else{
        echo ("<script language='javascript'> window.alert('Email Already Used!');
        window.location.href='login.php'</script>");
    }
?>

