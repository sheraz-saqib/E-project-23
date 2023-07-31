


<?php

session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}




$user_email = $_SESSION['email'];
$hospital_name = $_POST['hospital_name'];
$user_id = $_POST['user_id'];
$hospital_Manager_name = $_POST['hospital_Manager_name'];
$hospital_email = $_POST['hospital_email'];
$hospital_phone = $_POST['hospital_phone'];
$hospital_location = $_POST['hospital_location'];
$hopital_Manager_cnic = $_POST['hopital_Manager_cnic'];
$hopital_open_time = $_POST['hopital_open_time'];
$hopital_close_time = $_POST['hopital_close_time'];
$hopital_submit = $_POST['hopital_submit'];




if(isset($hopital_submit)){

  $check_hosQ ="SELECT * FROM `reg_hospital` WHERE `hospital_email` = '$user_email'";
  $check_hos = mysqli_query($conn,$check_hosQ);
  $fetch_check_hos = mysqli_fetch_assoc($check_hos);
  if( $fetch_check_hos['hospital_email'] != $user_email){
  if($hospital_name != '' && $hospital_Manager_name != '' && $hospital_email  != '' && $hospital_phone != '' && $hospital_location != '' && $hopital_Manager_cnic != '' && $hopital_open_time != '' && $hopital_close_time !=''){

    $hospital_insertQ = "INSERT INTO `reg_hospital`( `hospital_name`, `hospital_manager_name`, `hospital_email`, `hospital_contact`, `hospital_location`, `hospital_manager_cnic`, `hospital_open_time`, `hospital_close_time`, `user_id`)
     VALUES ('$hospital_name','$hospital_Manager_name','$hospital_email','$hospital_phone','$hospital_location','$hopital_Manager_cnic','$hopital_open_time ','$hopital_close_time','$user_id')";

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
}
if( $fetch_check_hos['hospital_email'] == $user_email){
  $already_hos_reg = true;

}

  if($hospital_name == '' || $hospital_Manager_name == ''|| $hospital_email == '' || $hospital_phone == '' || $hospital_location == '' || $hopital_Manager_cnic == '' || $hopital_open_time == '' || $hopital_close_time == '' ){
    $fill_error = true;
    $pat_register_error = false;
    $pat_register = false; 
    $already_hos_reg = false;
  }


}



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HS Admin </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <?php require './component/_admin_link.php'?>

  <style>
    .from_div{
        margin: 2rem;
        background-color: rgb(255, 255, 255);
        border-radius: .5rem;
        
    }
    .pagetitle{
        margin-left: 2rem;
        margin-top: 2rem;
    }
   form .col-12{
padding: 0 2rem;
   }
   form label{
    font-weight: 600; 
    color: #2b37a0;
   }
   .from_btn{
    margin-bottom: 2rem;
   }
   .mt-0{
    margin-top: -1rem !important;
   }
  .name_field{
    margin-right: 10rem !important;
  }
  .sent-message,.error-message{
   padding: .5rem;
   border-radius: .3rem;
   color: white;
  }

  .container form{
    margin:2rem !important;
  }
  </style>
</head>
<body>

<?php require './component/_admin_nav.php';?>



  <main id="main" class="main " >

    <div class="pagetitle ">
      <h1>Add Patient</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard ">
    <div class="container" >

        <div class="text-center">
            <?php
            
            if($pat_register){
              echo '<div class="sent-message bg-success">Patient added</div>';
            }
            if($already_pat_reg){
              echo '<div class="sent-message bg-success">Patient already Register </div>';
            }
            if($fill_error){
              echo '<div class="error-message bg-danger">Please fill out All feilds . try again!</div>';

            }
            if($pat_register_error){
              echo '<div style="color:white;" class="error-message bg-danger">Patient not Added try again!</div>';
            }
            ?>
            
            
          </div>
          <br><br>
          <form  action="#" method="post"  class="php-email-form">
        <input type="text" name="user_id" class="form-control" id="name" value="<?=$_SESSION['id']?> "  hidden >
          <div class="row">
            <div class="col-md-4 form-group">
            <label for="yourName" class="form-label">Hospital Name</label>
              <input type="text" name="hospital_name" class="form-control" id="name" placeholder="Your Name"  >
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label for="yourName" class="form-label"> Manager Name </label>
              <input  value="<?=$_SESSION['name']?>" type="text" class="form-control" name="hospital_Manager_name" id="phone" placeholder="Your Phone" >
           
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
            <label for="yourName" class="form-label">Offical Email</label>
              <input value="<?=$_SESSION['email']?>" type="email" class="form-control" name="hospital_email" id="email" placeholder="Your Email"  >
            
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
              <input minlength="5"  type="text" name="hospital_location" class="form-control" id="name" placeholder="Your location">
                    </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <label for="yourName" class="form-label">Manager Cnic</label>
              <input  value="<?=$_SESSION['cnic']?>" type="number"  class="form-control" name="hopital_Manager_cnic" id="phone" placeholder="Your Phone" >
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
      

      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require './component/_admin_footer.php'?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php require './component/_admin_script.php'?>
<?php require 'html2pdf.php'?>

</body>

</html>