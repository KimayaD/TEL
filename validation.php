<?php
include('config/db_connect.php');
session_start();



$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT username,pass FROM user_reg WHERE username='$username' && pass='$pass'";
$result = mysqli_query($connect,$sql);


$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['user'] = $username;
    print_r($_SESSION['user']);
    header('location:index.php');
}
else
{
    header('location:signup.php');
}


?>