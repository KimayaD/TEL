<?php 

include('config/db_connect.php');

//write a query
$sql = 'SELECT candidate_name,skills,photo,id FROM recruit_table ORDER BY created_at';

//make a query
$result = mysqli_query($connect,$sql);

//fetch resulting rows in an array
$recruits = mysqli_fetch_all($result,MYSQLI_ASSOC);


//free the result
mysqli_free_result($result);

//close the connection
mysqli_close($connect);





?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>
    
    <style>
    <?php include('template/style.css'); ?>
    </style>

    
    <div class="container">
    <!-- <h4 class="center">Received Applications</h4> -->
    <div class="row" style="z-index:-1">
    <?php foreach($recruits as $recruiting): ?>
    <div class="col s6 md3">
    <div class="card" style="width:230px; z-index:-1 ">
   
    <img class="card-img-top" src="<?php echo 'images/' .$recruiting["photo"] ?>" alt="Card image" style="height: 300px "> 
    <div class="card-body " style="height: 150px" >
    <h5 class="card-title"><?php echo htmlspecialchars($recruiting["candidate_name"]); ?></h5>

    <ul>
    <?php foreach(explode(',',$recruiting['skills']) as $ing) {?>
    <li class="card-text "><?php echo htmlspecialchars($ing); ?></li>
    <?php }?>
    </ul>
    
    </div>
    <div class="card-action right-align">
    <a href="#" >More Info</a>
    </div>

    </div>

    </div>

    <?php endforeach; ?>
    </div>
 
    </div>
    <div class="container fixed-height">

    </div>



    <?php include('template/footer.php'); ?>
</html>