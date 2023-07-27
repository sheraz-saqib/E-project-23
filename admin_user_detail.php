<?php
session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}


$fetch_userQ = "SELECT * FROM `user`";
$fetch_user = mysqli_query($conn,$fetch_userQ);
$totalUser = mysqli_num_rows($fetch_user);
// ==============
$fetch_userPatientQ = "SELECT user.id,reg_patient.patient_id,user.name,user.email,reg_patient.patient_gender,reg_patient.patient_select_hos,reg_patient.patient_app_day,reg_patient.patient_vacc,reg_patient.patient_status FROM user JOIN reg_patient WHERE user.name = reg_patient.patient_name AND user.email = reg_patient.patient_email;
";
$fetch_userPatient = mysqli_query($conn,$fetch_userPatientQ);
$totalUserPatient = mysqli_num_rows($fetch_userPatient); 
// =================
$fetch_HospitalQ = "SELECT * FROM `reg_hospital`";
$fetch_Hospital = mysqli_query($conn,$fetch_HospitalQ);
$totalHospital = mysqli_num_rows($fetch_Hospital);
// ==============

$fetch_PatientQ = "SELECT * FROM `reg_patient`";
$fetch_Patient = mysqli_query($conn,$fetch_PatientQ);

$totalPatient = mysqli_num_rows($fetch_Patient);
// ==============

$fetch_vaccineQ = "SELECT * FROM `vaccine`";
$fetch_vaccine = mysqli_query($conn,$fetch_vaccineQ);

$totalvaccine = mysqli_num_rows($fetch_vaccine);
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

  
</head>

<body>

<?php require './component/_admin_nav.php';?>



  <main id="main" class="main " >

    <div class="pagetitle ">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-index.php">Home</a></li>
          <li class="breadcrumb-item active">User detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard ">
      <div class="row ">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row ">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6  w-100">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total User</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$totalUser?></h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->



            <!-- Recent Sales -->
            <div class="col-12" >
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>option</h6>
                    </li>

                    <li><button class="dropdown-item" href="#" onclick="htmlToPdf()">Download Pdf</button></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Users </h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">#</th>
                        <th scope="col">user Name</th>
                        <th scope="col">user email</th>
                        <th scope="col">user cnic</th>
                        <th scope="col">Create Acc Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                    <?php

                    if($totalUser > 0){
                      while($user_data = mysqli_fetch_assoc($fetch_user)){ 
                        $i+=1;

                          echo '<tr>
                          <th scope="row"><a href="#">'.$i.'</a></th>
                          <th scope="row"><a href="#">'.$user_data['id'].'</a></th>
                          <td>'.$user_data['name'].'</td>
                          <td><a  class="text-primary">'.$user_data['email'].'</a></td>
                          <td>'.$user_data['cnic'].'</td>
                          <td><a  class="text-primary">'.$user_data['time'].'</a></td>
                          <td><a  href="user_del.php?DelId='.$user_data['id'].'" class="badge bg-danger user_delete">Delete</a></td>
                        </tr>';
                        }
                        
                    }
                    ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
<!-- Recent Sales -->
<div class="col-12" >
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>option</h6>
                    </li>

                    <li><button class="dropdown-item" href="#" onclick="htmlToPdf()">Download Pdf</button></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Users Register Patients</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                  
                        <th scope="col">User ID</th>
                        <th scope="col">Patient ID</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Patient email</th>
                        <th scope="col">Patient Gender</th>
                        <th scope="col">Patient Hospital</th>
                        <th scope="col">Appointment Day</th>
                        <th scope="col">Vaccine</th>
                        <th scope="col">Patient status</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                    <?php

                    if($totalUserPatient > 0){
                      while($userPatient_data = mysqli_fetch_array($fetch_userPatient)){ 
                     
                        if($userPatient_data['patient_status'] !== ''){
                          echo '<tr>
        
                          <th scope="row"><a href="#">'.$userPatient_data['id'].'</a></th>
                          <th scope="row"><a href="#">'.$userPatient_data['patient_id'].'</a></th>
                          <td>'.$userPatient_data['name'].'</td>
                          <td><a  class="text-primary">'.$userPatient_data['email'].'</a></td>
                          <td>'.$userPatient_data['patient_gender'].'</td>
                          <td>'.$userPatient_data['patient_select_hos'].'</td>
                          <td>'.$userPatient_data['patient_app_day'].'</td>
                          <td>'.$userPatient_data['patient_vacc'].'</td>
                          
                          <td>'.$userPatient_data['patient_status'].'</td>
                        </tr>';
                        }

                        if($userPatient_data['patient_status'] == ''){
                          echo '<tr>
        
                          <th scope="row"><a href="#">'.$userPatient_data['id'].'</a></th>
                          <th scope="row"><a href="#">'.$userPatient_data['patient_id'].'</a></th>
                          <td>'.$userPatient_data['name'].'</td>
                          <td><a  class="text-primary">'.$userPatient_data['email'].'</a></td>
                          <td>'.$userPatient_data['patient_gender'].'</td>
                          <td>'.$userPatient_data['patient_select_hos'].'</td>
                          <td>'.$userPatient_data['patient_app_day'].'</td>
                          <td>'.$userPatient_data['patient_vacc'].'</td>
                          
                          <td>Pending</td>
                        </tr>';
                        }
                        }
                       
                        
                    }
                    ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <div class="col-12" >
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>option</h6>
                    </li>

                    <li><button class="dropdown-item" href="#" onclick="htmlToPdf()">Download Pdf</button></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Users Register for Hospital</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">#</th>
                        <th scope="col">user Name</th>
                        <th scope="col">hospital email</th>
                        <th scope="col">hospital manager cnic</th>
                        <th scope="col">hospital location</th>
                        <th scope="col">hospital contact</th>
                        <th scope="col">Create Acc Date</th>
                      </tr>
                    </thead>
                    <tbody>

                    
                    <?php

                    if($totalHospital > 0){
                      while($user_apply_hospital = mysqli_fetch_assoc($fetch_Hospital)){ 
                        $j+=1;

                          echo '<tr>
                          <th scope="row"><a href="#">'.$j.'</a></th>
                          <th scope="row"><a href="#">'.$user_apply_hospital['hospital_id'].'</a></th>
                          <td>'.$user_apply_hospital['hospital_manager_name'].'</td>
                          <td><a  class="text-primary">'.$user_apply_hospital['hospital_email'].'</a></td>
                          <td>'.$user_apply_hospital['hospital_manager_cnic'].'</td>
                          <td><a  class="text-primary">'.$user_apply_hospital['hospital_location'].'</a></td>
                          <td><a  class="text-primary">'.$user_apply_hospital['hospital_contact'].'</a></td>
                          <td><a  class="text-primary">'.$user_apply_hospital['time'].'</a></td>
                        </tr>';
                        }
                        
                    }
                    ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <!-- Top Selling -->
            <div class="col-12 ">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

      

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php require './component/_admin_script.php'?>
<?php require 'html2pdf.php'?>

</body>

</html>