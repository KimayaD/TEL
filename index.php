<?php



session_start();
if(isset($_SESSION['user']))
{
    header('location:signup.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>
    
    <style>
    <?php include('template/style.css'); ?>
    </style>
    <a href="logout.php">Logout</a>
    <h1 class="text-uppercase">Welcome <?php echo $_SESSION['user'];?></h1>
    <div class="container fixed-height">

    </div>
    <?php include('template/footer.php'); ?>
</html>