<?php

session_start();
require 'conn.php';
if(!$_SESSION['admin_name'] &&  $_SESSION['admin_name'] !=true ){
    header('location:login.php');
}



$patient_ID = $_GET['patient_ID'];


$approvedQ= "UPDATE `reg_patient` SET `patient_status` = 'reject' WHERE `reg_patient`.`patient_id` = $patient_ID";
$approved = mysqli_query($conn,$approvedQ);
if($approved){
    header('location:admin_pat_detail.php');
}


?>