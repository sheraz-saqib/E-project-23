
<?php

session_start();
require 'conn.php';
if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
    header('location:login.php');
}

$status_email = $_POST['status_email'];
$status_submit = $_POST['status_submit'];



if(isset($status_submit)){

  if($status_email != '' ){

    $pat_insertQ = "";

    $pat_insert = mysqli_query($conn ,$pat_insertQ);
     
    if($pat_insert){
     
      $pat_register= true;
      $pat_register_error = false;
     
    }
    if(!$pat_insert){
      $pat_register= false;
      $pat_register_error = true;
    }


  }
  
  if($pat_name == '' || $pat_email == ''|| $pat_phone == '' || $pat_age == '' || $pat_cnic == '' || $pat_gender == '' || $pat_day_name == '' || $pat_hospital_name == '' || $pat_vaccine_name == ''){
    $fill_error = true;
    $pat_register_error = false;
    $pat_register = false; 
  }


}

$fetch_hospitalQ = "SELECT * FROM `reg_hospital`";
$fetch_hospital = mysqli_query($conn,$fetch_hospitalQ);



$fetch_hospitalQ = "SELECT * FROM `reg_hospital`";
$fetch_hospital = mysqli_query($conn,$fetch_hospitalQ);
$hospital_row = mysqli_num_rows($fetch_hospital);
// =============
// =============
// =============




?>




<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>check the status</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php require './component/_links.php';?>

<style>
    .status_container{
        width: 30vw;
    }
  .error-message{
    border-radius: .4rem;
    padding: .5rem;
    color: white;
  }
  .sent-message{
    border-radius: .4rem;
    padding: .5rem;
    color: white;
  }
  @media only screen and (max-width:61.5em)  {
    .status_container
    {
        width: 80vw;
    }
  }
</style>
</head>

<body>
<?php require './component/_nav.php';?>


<br><br><br><br><br>
  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg ">
      <div class="container status_container" >

        <div class="section-title">
          <h2>Status Check for Hospital</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="text-center ">
            <?php
            
            if($pat_register){
              echo '<div class="sent-message bg-success">Your appointment request has been sent successfully you inform in 12 hours. Thank you! </div>';
            }
            if($fill_error){
              echo '<div class="error-message bg-danger">Please fill out All feilds . try again!</div>';

            }
            if($pat_register_error){
              echo '<div style="color:white;" class="error-message bg-danger">Your appointment request has not been sent . try again!</div>';
            }
            ?>
            
            
          </div>
          <br><br>
          <form class=" row g-3 needs-validation " novalidate action="user_status.php" method="POST">
                  <?php
    if(!$conn){
        echo "<div class='notification'>
        <div class='message danger'>
          <h2>connection failed!</h2>
          <p>Your connection problem please try again.</p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }

    if($loginError){
        echo "<div class='notification'>
        <div class='message danger'>
          <h2>failed!</h2>
          <p>Login failed incorrect email or password </p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }
    if($notification){
      echo "<div class='notification'>
      <div class='message danger'>
        <h2>failed!</h2>
        <p>Please fill out all feilds</p>
      </div>
      <div class='cross_icon'>
        <i class='fa-solid fa-xmark'></i>
      </div>
    </div>";
  }
    ?>
                  <div class="col-12">
                      <label for="yourEmail" class="form-label "><b>Email</b></label>
                      <input type="email" name="status_email" class="form-control" id="yourEmail"  value="<?=$_SESSION['email']?>">
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12 row justify-content-center mt-2">
                    <input class="btn appointment-btn  w-100" name="status_submit" type="submit" value="Check the status">
                    </div>
                  </form>

      </div>
    </section><!-- End Appointment Section -->




  

    <?php require './component/_footer.php';?>
<!-- ======================== -->
  <!-- Vendor JS Files -->
  <?php require './component/_user_script.php';?>
    </body>
    
</html>