<?php
require 'conn.php';
session_start();


    // echo  $_SESSION['id'] . "<br>";
    // echo  $_SESSION['name'] . "<br>";
    // echo  $_SESSION['cnic']. "<br>";
    // echo  $_SESSION['email']. "<br>";
   

    $fetch_hospitalQ = "SELECT * FROM `reg_hospital`";

    $fetch_hospital = mysqli_query($conn,$fetch_hospitalQ);

    while($data = mysqli_fetch_assoc($fetch_hospital)){
      // echo $data['hospital_name']."<br>";
    
     
?>


<a href="logout.php">logout</a>


<script src="node_modules/jspdf/dist/jspdf.umd.js"></script>
<script src="node_modules/html2canvas/dist/html2canvas.min.js"></script>


<script>
  window.jsPDF = window.jspdf.jsPDF;
</script>
<div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>