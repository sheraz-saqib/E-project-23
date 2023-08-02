<?php

session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}



$hospital_ID = $_GET['hospital_ID'];
$page_url = $_GET['pageUrl'];
$approvedQ= "UPDATE `reg_hospital` SET `hospital_status` = 'approved' WHERE `reg_hospital`.`hospital_id` = $hospital_ID";
$approved = mysqli_query($conn,$approvedQ);
$select_hos_dataQ = "SELECT * FROM `reg_hospital` WHERE `hospital_id`= $hospital_ID"; 
$select_hos_data = mysqli_query($conn,$select_hos_dataQ);
$fetch_select_hos_data = mysqli_fetch_assoc($select_hos_data); 

 $hospital_name   =  $fetch_select_hos_data['hospital_name'];
 $hospital_manager_name   =  $fetch_select_hos_data['hospital_manager_name'];
 $hospital_email   =  $fetch_select_hos_data['hospital_email'];
 $hospital_contact   =  $fetch_select_hos_data['hospital_contact'];
 $hospital_location   =  $fetch_select_hos_data['hospital_location'];
 $hospital_manager_cnic   =  $fetch_select_hos_data['hospital_manager_cnic'];
 $hospital_open_time   =  $fetch_select_hos_data['hospital_open_time'];
 $hospital_close_time   =  $fetch_select_hos_data['hospital_close_time'];

$insert_acc_tableQ  = "INSERT INTO `accept_hospital`(`reg_hos_id`, `hospital_name`, `hospital_manager_name`, `hospital_email`, `hospital_contact`, `hospital_location`, `hospital_manager_cnic`, `hospital_open_time`, `hospital_close_time`,`hospital_verified`)
 VALUES 
 ('$hospital_ID','$hospital_name','$hospital_manager_name','$hospital_email','$hospital_contact',' $hospital_location','$hospital_manager_cnic','$hospital_open_time','$hospital_close_time','not verified')";


$insert_acc_table  = mysqli_query($conn,$insert_acc_tableQ);

$delete_hospital_From_reject_patQ = "DELETE FROM `reject_hospital` WHERE `reg_hos_id` = $hospital_ID"; 
$delete_hospital_From_reject_pat = mysqli_query($conn,$delete_hospital_From_reject_patQ );
// $fetch_rejct_pat_data = mysqli_fetch_assoc($delete_pateint_From_reject_pat);



// if($fetch_select_pat_data[''])


if($insert_acc_table){
    header('location:'.$page_url .'');
}


?>