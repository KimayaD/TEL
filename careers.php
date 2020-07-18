<?php

include('config/db_connect.php');
$errors = array('candidate_name'=>'','email'=>'','skills'=>'');
$candidate_name = $email = $skills = '';
if(isset($_POST['submit'])){
    
    //path to store uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    $image = $_FILES['image']['name'];


    if(empty($_POST['candidate_name'])){
        $errors['candidate_name']= "A name is required <br >";
    }
    else{
        $candidate_name= $_POST['candidate_name'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$candidate_name))
        {
            $errors['candidate_name']= "Enter valid name";
        }
        
    }
    if(empty($_POST['email'])){
        $errors['email']= "An email is required <br >";
    }
    else{
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $errors['email']= "Enter correct email";
        }
        
    }
    
    if(empty($_POST['skills'])){
        $errors['skills']=  "Skills are required <br >";
    }
    else{

        $skills= $_POST['skills'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$skills))
        {
            $errors['skills']= "Enter comma separated skills";
        }
        
    }

    //only if 0 errors
    if(array_filter($errors))
    {
    // echo "errors in form";
    }
    else{
        //go back to recruitment.php
        $candidate_name = mysqli_real_escape_string($connect,$_POST['candidate_name']);
        $email = mysqli_real_escape_string($connect,$_POST['email']);
        $skills = mysqli_real_escape_string($connect,$_POST['skills']);

        $sql = "INSERT INTO recruit_table(candidate_name,email,photo,skills) VALUES('$candidate_name','$email','$image','$skills')";

        if(mysqli_query($connect,$sql)){
            header('Location: recruitment.php');

        }
        else{
            echo "Error".mysqli_error($connect);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
      
        

        
    }

}



?>

<!DOCTYPE html>
<html lang="en">
    <?php include('template/header.php'); ?>
    
    <style>
    <?php include('template/style.css'); ?>
    </style>


    <div class="container bg-light" style="width:400px">
    <form action="careers.php" method="POST"  enctype="multipart/form-data" >


        <h4 style="text-align:center">Want to join our Team?</h4>
        <h5 style="text-align:center">Fill this form</h5>
    
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" name="candidate_name" id="username" class="form-control" value= <?php echo htmlspecialchars($candidate_name); ?> >
            <div class="text-danger"><?php echo $errors['candidate_name']; ?></div>
          
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value= <?php echo htmlspecialchars($email); ?>>
            <div class="text-danger"><?php echo $errors['email']; ?></div>
        </div>

        <div class="form-group">
            <label for="skills">Skills (Enter comma separated data)</label>
            <input type="text" name="skills" id="skills"  class="form-control" value= <?php echo htmlspecialchars($skills); ?>>
            <div class="text-danger"><?php echo $errors['skills']; ?></div>
        </div>

        <div  class="form-group">
        <label for="dp">Photo</label>
  	    <input type="file" name="image" id="dp">
  	    </div>


        <div class="center">
            <input type="submit" name="submit" value="submit" class=" btn btn-outline-primary">
        </div>

        
        
    </form>
    </div>
   

    <div class="container fixed-height">

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    


    <?php include('template/footer.php'); ?>
</html>