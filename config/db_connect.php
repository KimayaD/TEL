<?php
//connect to database
$connect = mysqli_connect('localhost','kimsi','php@sql1234','tel');

//check connection
if(!$connect)
{
    echo "connection" . mysqli_connect_error();
}

?>