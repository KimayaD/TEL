<?php
include('config/db_connect.php');
header('location:signup.php');

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT username,pass FROM user_reg WHERE username='$username'";
$result = mysqli_query($connect,$sql);


$num = mysqli_num_rows($result);
if($num == 1){
    echo "Username exists";
}
else
{
    $reg = "INSERT INTO user_reg(username,pass) VALUES('$username','$pass')";
    mysqli_query($connect,$reg);
    echo "Registration Successful";
}


?>