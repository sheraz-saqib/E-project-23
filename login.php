<?php

require 'conn.php';




$email = $_POST['email'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];





if(isset($submit)){


  if($email != '' && $pass !=''){
    $selectQ = "SELECT * FROM `user` WHERE `email` = '$email'";
    $select = mysqli_query($conn,$selectQ);
    $data = mysqli_fetch_assoc($select);
    $Get_email = $data['email'];
    $Get_pass = $data['password'];
    $varifyPass = password_verify($pass,$Get_pass);

    // echo var_dump($varifyPass);
    if($email === $Get_email && $varifyPass == 1){
      session_start();
      $_SESSION['id'] = $data['id'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['cnic'] = $data['cnic'];
      $_SESSION['email'] = $data['email'];
      header('location:welcome.php');
    }

  }

if($email == ''  && $pass == '')
{
  $notification = true;
}

if($email !== $Get_email &&  $varifyPass != 1  ){
  $loginError = true;
}
if($notification){
  $loginError = false;
}
if($loginError){
  $notification = false;
}







}






?>
    <!-- notification -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    *{
      box-shadow: none !important;
      
    }
    .notification{
    background-color: rgb(251, 251, 252);
    max-width:70vw;
    width: 100%;
    min-height: 2rem;
    border-radius: .6rem;
    padding: .6rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}
.cross_icon i{
    font-size: 1rem;
    color: grey;
    cursor: pointer;
}
.message h2{
font-size: 1rem;
text-transform: lowercase;

}
.success h2{
    color: rgb(31, 190, 84) ;
}
.danger h2{
    color: rgb(223, 47, 24) ;
}
.message p{
    font-weight: 500;
    letter-spacing: .01rem;
    font-size: .7rem;
    color: rgb(85, 85, 85);
    text-transform: capitalize !important;
}
</style>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span style="font-size: 2rem; margin-left: 0.5rem;" class="d-none d-lg-block">HS centre</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="login.php" method="POST">
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
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" >
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="pass" class="form-control" id="yourPassword" >
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                
                    <div class="col-12">
                    <input class="btn btn-primary w-100" name="submit" type="submit" value="Login">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="signin.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>





