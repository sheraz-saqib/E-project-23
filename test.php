<?php
require 'conn.php';
session_start();


    // echo  $_SESSION['id'] . "<br>";
    // echo  $_SESSION['name'] . "<br>";
    // echo  $_SESSION['cnic']. "<br>";
    // echo  $_SESSION['email']. "<br>";
   

    
     
?>


<a href="logout.php">logout</a>


<script src="node_modules/jspdf/dist/jspdf.umd.js"></script>
<script src="node_modules/html2canvas/dist/html2canvas.min.js"></script>



<div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="from_pdf">
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

          <div class="text-center"><button onclick="htmlToPdf ()">download pdf</button></div>


                          <script>
                            window.jsPDF = window.jspdf.jsPDF;

                            const htmlToPdf = ()=>{
                              let doc = new jsPDF();
                              let file = document.querySelector('#from_pdf');


                              doc.html(file,{
                                callback:function(doc){
                                  doc.save('document-html.pdf')
                                },
                                margin:[10,10,10,10],
                                autoPaging:'text',
                                x:0,
                                y:0,
                                width:190,
                                windowWidth:675
                              })
                            }


                          </script>