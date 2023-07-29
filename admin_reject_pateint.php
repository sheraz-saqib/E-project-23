<?php

session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}



$patient_ID = $_GET['patient_ID'];
$approvedQ= "UPDATE `reg_patient` SET `patient_status` = 'reject' WHERE `reg_patient`.`patient_id` = $patient_ID";
$approved = mysqli_query($conn,$approvedQ);
$select_pat_dataQ = "SELECT * FROM `reg_patient` WHERE `patient_id`= $patient_ID "; 
$select_pat_data = mysqli_query($conn,$select_pat_dataQ);
$fetch_select_pat_data = mysqli_fetch_assoc($select_pat_data);

 $patient_name   =  $fetch_select_pat_data['patient_name'];
 $patient_email   =  $fetch_select_pat_data['patient_email'];
 $patient_phone   =  $fetch_select_pat_data['patient_phone'];
 $patient_cnic   =  $fetch_select_pat_data['patient_cnic'];
 $patient_age   =  $fetch_select_pat_data['patient_age'];
 $patient_select_hos   =  $fetch_select_pat_data['patient_select_hos'];
 $patient_gender   =  $fetch_select_pat_data['patient_gender'];
 $patient_vacc   =  $fetch_select_pat_data['patient_vacc'];
 $patient_app_day   =  $fetch_select_pat_data['patient_app_day'];
 $patient_status   =  $fetch_select_pat_data['patient_status'];

$insert_acc_tableQ  = "INSERT INTO `reject_patient`(`reg_pateint_id`, `patient_name`, `patient_email`, `patient_phone`, `patient_cnic`, `patient_age`, `patient_select_hos`, `patient_gender`, `patient_vacc`, `patient_app_day`)
 VALUES
 ('$patient_ID',' $patient_name','$patient_email','$patient_phone','$patient_cnic',' $patient_age','$patient_select_hos','$patient_gender','$patient_vacc','$patient_app_day')";


$insert_acc_table  = mysqli_query($conn,$insert_acc_tableQ);

$delete_pateint_From_reject_patQ = "DELETE FROM `accept_patient` WHERE `reg_pateint_id` = $patient_ID"; 
$delete_pateint_From_reject_pat = mysqli_query($conn,$delete_pateint_From_reject_patQ );
// $fetch_rejct_pat_data = mysqli_fetch_assoc($delete_pateint_From_reject_pat);



// if($fetch_select_pat_data[''])


if($insert_acc_table){
    header('location:admin_pat_detail.php');
}


?>