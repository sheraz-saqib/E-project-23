<?php
session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}



// ==============


$fetch_hospitalQ = "SELECT * FROM `reg_hospital`";
$fetch_hospital = mysqli_query($conn,$fetch_hospitalQ);
$totalhospital = mysqli_num_rows($fetch_hospital);
// ==============
$fetch_app_hospitalQ = "SELECT * FROM `accept_hospital`";
$fetch_app_hospital = mysqli_query($conn,$fetch_app_hospitalQ);
$total_app_hospital = mysqli_num_rows($fetch_app_hospital);
// ==============
$fetch_reject_hospitalQ = "SELECT * FROM `reject_hospital`";
$fetch_reject_hospital = mysqli_query($conn,$fetch_reject_hospitalQ);
$total_reject_hospital_all = mysqli_num_rows($fetch_reject_hospital);
// =================
// $fetch_approved_PatientQ = "SELECT * FROM `reg_hospital` INNER JOIN `accept_hospital` ON `reg_hospital`.`hospital_id` = `accept_hospital`.`reg_pateint_id` WHERE `reg_patient`.`patient_status` = 'approved' AND `accept_patient`.`pateint_dos_1` = 'not vaccinated';";
// $fetch_approved_Patient = mysqli_query($conn,$fetch_approved_PatientQ);
// $total_approved_Patient = mysqli_num_rows($fetch_approved_Patient);
// =================
$fetch_reject_hospitalQ = "SELECT * FROM `reg_patient` WHERE `patient_status` ='reject'";
$fetch_reject_hospital = mysqli_query($conn,$fetch_reject_hospitalQ);
$total_reject_hospital = mysqli_num_rows($fetch_reject_hospital);
// =================
$fetch_pending_hospitalQ = "SELECT * FROM `reg_hospital` WHERE `hospital_status` =''";
$fetch_pending_hospital = mysqli_query($conn,$fetch_pending_hospitalQ);
$total_pending_hospital = mysqli_num_rows($fetch_pending_hospital);
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
    table{
        width: 100vw !important;
        overflow-x: scroll !important;
    }
    table th{
        white-space: nowrap;
      
    }
    table td{
        border-bottom: 1px solid #e4e4e4 !important;
    }
  </style>
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
            <div class="col-xxl-4 col-md-6  w-50">
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
                  <h5 class="card-title">Total Patient</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$totalhospital?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
             <!-- Sales Card -->
             <div class="col-xxl-4 col-md-6  w-50">
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
                  <h5 class="card-title">Pending Hospital</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$total_pending_hospital?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            
<!-- Sales Card -->
<div class="col-xxl-4 col-md-6  w-50">
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
                  <h5 class="card-title">Approved Hospital</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$total_app_hospital?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6  w-50">
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
                  <h5 class="card-title">Reject Hospital</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$total_reject_hospital_all?></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

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
                  <h5 class="card-title">Total Patient</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">patient id</th>
                        <th scope="col">patient name</th>
                        <th scope="col">patient email</th>
                        <th scope="col">patient phone</th>
                        <th scope="col">patient cnic</th>
                        <th scope="col">patient age</th>
                      
                        <th scope="col">patient gender</th>
                        <th scope="col">patient vaccine</th>
                        <th scope="col">day</th>
                        <th scope="col">hospital name</th>
                        <th scope="col">patient status</th>
                      
             
                      </tr>
                    </thead>
                    <tbody>

                    
                    <?php

                    if($totalPatient  > 0){
                      while($patient_data = mysqli_fetch_assoc($fetch_Patient)){ 
                        $i+=1;

                          if($patient_data['patient_status'] !=''){
                            echo '<tr>
                          <td scope="row"><a href="#">'.$i.'</a></td>
                          <td scope="row"><a href="#">'.$patient_data['patient_id'].'</a></td>
                          <td>'.$patient_data['patient_name'].'</td>
                          <td><a  class="text-primary">'.$patient_data['patient_email'].'</a></td>
                          <td>'.$patient_data['patient_phone'].'</td>
                          <td>'.$patient_data['patient_cnic'].'</td>
                          <td>'.$patient_data['patient_age'].'</td>
                          <td>'.$patient_data['patient_gender'].'</td>
                          <td>'.$patient_data['patient_vacc'].'</td>
                          <td>'.$patient_data['patient_app_day'].'</td>
                          <td>'.$patient_data['patient_select_hos'].'</td>
                          <td>'.$patient_data['patient_status'].'</td>
                          
                        </tr>';
                          }
                          if($patient_data['patient_status'] ==''){
                            echo '<tr>
                            <td scope="row"><a href="#">'.$i.'</a></td>
                            <td scope="row"><a href="#">'.$patient_data['patient_id'].'</a></td>
                            <td>'.$patient_data['patient_name'].'</td>
                            <td><a  class="text-primary">'.$patient_data['patient_email'].'</a></td>
                            <td>'.$patient_data['patient_phone'].'</td>
                            <td>'.$patient_data['patient_cnic'].'</td>
                            <td>'.$patient_data['patient_age'].'</td>
                            <td>'.$patient_data['patient_gender'].'</td>
                            <td>'.$patient_data['patient_vacc'].'</td>
                            <td>'.$patient_data['patient_app_day'].'</td>
                            <td>'.$patient_data['patient_select_hos'].'</td>
                            <td>pending</td>
                            
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
<!-- Recent Sales -->
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
                  <h5 class="card-title">Approved Patient</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">patient id</th>
                        <th scope="col">patient name</th>
                        <th scope="col">patient email</th>
                        <th scope="col">patient phone</th>
                        <th scope="col">patient cnic</th>
                        <th scope="col">patient age</th>
                        <th scope="col">patient gender</th>
                        <th scope="col">patient vaccine</th>
                        <th scope="col">day</th>
                        <th scope="col">hospital name</th>
                        <th scope="col">patient status</th>
                        <th scope="col">action</th>
             
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                    if($total_approved_Patient  > 0){
                      while($app_patient_data = mysqli_fetch_assoc($fetch_approved_Patient)){ 
                        $j+=1;
if($app_patient_data['patient_status'] == 'approved'){
  echo '<tr>
  <td scope="row"><a href="#">'.$j.'</a></td>
  <td scope="row"><a href="#">'.$app_patient_data['patient_id'].'</a></td>
  <td>'.$app_patient_data['patient_name'].'</td>
  <td><a  class="text-primary">'.$app_patient_data['patient_email'].'</a></td>
  <td>'.$app_patient_data['patient_phone'].'</td>
  <td>'.$app_patient_data['patient_cnic'].'</td>
  <td>'.$app_patient_data['patient_age'].'</td>
  <td>'.$app_patient_data['patient_gender'].'</td>
  <td>'.$app_patient_data['patient_vacc'].'</td>
  <td>'.$app_patient_data['patient_app_day'].'</td>
  <td>'.$app_patient_data['patient_select_hos'].'</td>
  <td>'.$app_patient_data['patient_status'].'</td>
  <td><a  href="admin_reject_pateint.php?patient_ID='.$app_patient_data['patient_id'].'&pageUrl=admin_pat_detail.php" class="badge bg-danger ">reject</a></td>
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
                  <h5 class="card-title">Reject Patient</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">patient id</th>
                        <th scope="col">patient name</th>
                        <th scope="col">patient email</th>
                        <th scope="col">patient phone</th>
                        <th scope="col">patient cnic</th>
                        <th scope="col">patient age</th>
                        <th scope="col">patient gender</th>
                        <th scope="col">patient vaccine</th>
                        <th scope="col">day</th>
                        <th scope="col">hospital name</th>
                        <th scope="col">patient status</th>
                        <th scope="col">action</th>
             
                      </tr>
                    </thead>
                    <tbody>

                    
                    <?php

                    if($total_reject_Patient > 0){
                      while($reg_patient_data = mysqli_fetch_assoc($fetch_reject_Patient)){ 
                        $i+=1;

                          echo '<tr>
                          <td scope="row"><a href="#">'.$i.'</a></td>
                          <td scope="row"><a href="#">'.$reg_patient_data['patient_id'].'</a></td>
                          <td>'.$reg_patient_data['patient_name'].'</td>
                          <td><a  class="text-primary">'.$reg_patient_data['patient_email'].'</a></td>
                          <td>'.$reg_patient_data['patient_phone'].'</td>
                          <td>'.$reg_patient_data['patient_cnic'].'</td>
                          <td>'.$reg_patient_data['patient_age'].'</td>
                          <td>'.$reg_patient_data['patient_gender'].'</td>
                          <td>'.$reg_patient_data['patient_vacc'].'</td>
                          <td>'.$reg_patient_data['patient_app_day'].'</td>
                          <td>'.$reg_patient_data['patient_select_hos'].'</td>
                          <td>'.$reg_patient_data['patient_status'].'</td>
                          <td><a  href="admin_accept_pateint.php?patient_ID='.$reg_patient_data['patient_id'].'&pageUrl=admin_pat_detail.php" class="badge bg-success ">approved</a></td>
                        
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
                  <h5 class="card-title">Requesting hospital</h5>

                  <table class="table table-borderless datatable" id="dowload_pdf">
                    <thead>
                      <tr>
                        <th scope="col">s.no</th>
                        <th scope="col">user_id</th>
                        <th scope="col">hospital_id </th>
                        <th scope="col">hospital_name</th>
                        <th scope="col">hospital_email</th>
                        <th scope="col">hospital_manager_name</th>
                        <th scope="col">hospital_contact</th>
                        <th scope="col">hospital_location</th>
                        <th scope="col">hospital_manager_cnic</th>
                        <th scope="col">hospital_open_time</th>
                        <th scope="col">hospital_close_time</th>
                       
                        <th scope="col">hospital_status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($total_pending_hospital  > 0){
                      while($pending_hospital_data = mysqli_fetch_assoc($fetch_pending_hospital)){ 
                        $i+=1;
                          echo '<tr>
                          <td scope="row"><a href="#">'.$i.'</a></td>
                          <td scope="row"><a href="#">'.$pending_hospital_data['user_id'].'</a></td>
                          <td scope="row"><a href="#">'.$pending_hospital_data['hospital_id'].'</a></td>
                          <td>'.$pending_hospital_data['hospital_name'].'</td>
                          <td><a  class="text-primary">'.$pending_hospital_data['hospital_email'].'</a></td>
                          <td>'.$pending_hospital_data['hospital_manager_name'].'</td>
                          <td>'.$pending_hospital_data['hospital_contact'].'</td>
                          <td>'.$pending_hospital_data['hospital_location'].'</td>
                          <td>'.$pending_hospital_data['hospital_manager_cnic'].'</td>
                          <td>'.$pending_hospital_data['hospital_open_time'].'</td>
                          <td>'.$pending_hospital_data['hospital_close_time'].'</td>
                          <td>pending</td>
                          <td><a  href="admin_accept_hospital.php?hospital_ID='.$pending_hospital_data['hospital_id'].'&pageUrl=admin_hos_detail.php" class="badge bg-success ">approved</a></td>
                          <td><a  href="admin_reject_hospital.php?hospital_ID='.$pending_hospital_data['hospital_id'].'&pageUrl=admin_hos_detail.php" class="badge bg-danger ">reject</a></td>
                        </tr>';
                        }
                        
                    }
                    ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->

      

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