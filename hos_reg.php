
<?php

session_start();
require 'conn.php';
if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
    header('location:login.php');
}

$hospital_name = $_POST['hospital_name'];
$hospital_Manager_name = $_POST['hospital_Manager_name'];
$hospital_email = $_POST['hospital_email'];
$hospital_phone = $_POST['hospital_phone'];
$hospital_location = $_POST['hospital_location'];
$hopital_Manager_cnic = $_POST['hopital_Manager_cnic'];
$hopital_open_time = $_POST['hopital_open_time'];
$hopital_close_time = $_POST['hopital_close_time'];
$hopital_submit = $_POST['hopital_submit'];




if(isset($hopital_submit)){

  if($hospital_name != '' && $hospital_Manager_name != '' && $hospital_email  != '' && $hospital_phone != '' && $hospital_location != '' && $hopital_Manager_cnic != '' && $hopital_open_time != '' && $hopital_close_time !=''){

    $hospital_insertQ = "INSERT INTO `reg_hospital`(`hospital_name`, `hospital_manager_name`, `hospital_emial`, `hospital_contact`, `hospital_location`, `hospital_manager_cnic`, `hospital_open_time`, `hospital_close_time`)
     VALUES ('$hospital_name','$hospital_Manager_name','$hospital_email','$hospital_phone','$hospital_location','$hopital_Manager_cnic','$hopital_open_time ','$hopital_close_time')";

    $hospital_insert = mysqli_query($conn ,$hospital_insertQ);
     
    if($hospital_insert){
     
      $hospital_register= true;
      $hospital_register_error = false;
     
    }
    if(!$hospital_insert){
      $hospital_register= false;
      $hospital_register_error = true;
    }


  }
  
  if($hospital_name == '' || $hospital_Manager_name == ''|| $hospital_email == '' || $hospital_phone == '' || $hospital_location == '' || $hopital_Manager_cnic == '' || $hopital_open_time == '' || $hopital_close_time == '' ){
    $fill_error = true;
    $pat_register_error = false;
    $pat_register = false; 
  }


}







?>




<!DOCTYPE html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php require './component/_links.php'?>

<style>
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
</style>
</head>

<body>
    <?php require './component/_nav.php';?>


<br><br><br><br><br>
  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg">
      <div class="container" >

        <div class="section-title">
          <h2>Registeration for Hospital</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="text-center">
            <?php
            
            if($hospital_register){
              echo '<div class="sent-message bg-success">Your appointment request has been sent successfully you inform in 12 hours. Thank you! </div>';
            }
            if($fill_error){
              echo '<div class="error-message bg-danger">Please fill out All feilds . try again!</div>';

            }
            if($hospital_register_error){
              echo '<div style="color:white;" class="error-message bg-danger">Your appointment request has not been sent . try again!</div>';
            }
            ?>
            
            
          </div>
          <br><br>
        <form  action="#" method="post"  class="php-email-form">
        
          <div class="row">
            <div class="col-md-4 form-group">
            <label for="yourName" class="form-label">Hospital Name</label>
              <input type="text" name="hospital_name" class="form-control" id="name" placeholder="Your Name"  >
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label for="yourName" class="form-label">Manager Name </label>
              <input type="text" class="form-control" name="hospital_Manager_name" id="phone" placeholder="Your Phone" >
           
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label for="yourName" class="form-label">Offical Email</label>
              <input type="email" class="form-control" name="hospital_email" id="email" placeholder="Your Email"  >
            
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 form-group">
            <label for="yourName" class="form-label">Contact</label>
              <input type="number" class="form-control" name="hospital_phone" id="phone" placeholder="Your Phone" >
           
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label for="yourName" class="form-label">Hospital location</label>
              <input minlength="5"  type="text" name="hospital_location" class="form-control" id="name" placeholder="Your Cnic">
                    </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="yourName" class="form-label">Manager Cnic</label>
              <input type="number"  class="form-control" name="hopital_Manager_cnic" id="phone" placeholder="Your Phone" >
            </div>
          </div>
          <div class="row">
 
            <div class="col-md-4 form-group mt-3">
            <label for="yourName" class="form-label">Hospital Open Time</label>
              <input type="time" class="form-control" name="hopital_open_time" id="phone" placeholder="Your Phone" >
                      </div>
            <div class="col-md-4 form-group mt-3">
            <label for="yourName" class="form-label">Hospital Close Time</label>
              <input type="time" class="form-control" name="hopital_close_time" id="phone" placeholder="Your Phone" >
            </div>
          </div>
          <br>
          <div class="text-center"><input class="btn w-100" name="hopital_submit" type="submit" value="Regiter"></div>
          <!-- <button class="w-100" type="submit" value="Regiter">Regiter</button> -->
        </form>

      </div>
    </section><!-- End Appointment Section -->




  

    <?php require './component/_footer.php';?>
<!-- ======================== -->
<?php require './component/_user_script.php';?>
    </body>
    
</html>