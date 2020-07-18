<?php





?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>
    
    <style>
    <?php include('template/style.css'); ?>
    </style>



<!-- Indicators -->


<!-- The slideshow -->
<div class="container p-3 my-2 text-white fixed-height" style="height: 500px " >
        
<div id="demo" class="carousel slide" data-ride="carousel" style="z-index:-1">
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner" style="height: 450px ">
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/207247/pexels-photo-207247.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Los Angeles" width="700px" height="600px">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/175389/pexels-photo-175389.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Chicago" width="700px" height="600px">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/2518861/pexels-photo-2518861.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="New York" width="700px" height="600px">
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>

        </div>
    </div>
    <?php include('template/footer.php'); ?>

</html>