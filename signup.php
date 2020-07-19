<?php

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>
    
    <style>
    <?php include('template/style.css'); ?>
    </style>
    <div class="container" style="max-width=100%">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Login Here</h2>
            <form action="validation.php" method="POST"  enctype="multipart/form-data" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
         </form>
            
        
        </div>


        <div class="col-md-6 login-right">
            <h2>Register Here</h2>
            <form action="register.php" method="POST"  enctype="multipart/form-data" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
         </form>
            
        
        </div>
        </div>
    </div>
    
    <div class="container fixed-height">

    </div>
    <?php include('template/footer.php'); ?>
</html>