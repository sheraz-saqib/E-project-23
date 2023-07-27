<?php
session_start();
require 'conn.php';
if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
    header('location:login.php');
}

$download_user_card_id = $_GET['download_user_card_id'];


echo $download_user_card_id;

$fetch_approved_pateint_status_selectQ = "SELECT * FROM `accept_patient` WHERE `pateint_id`= $download_user_card_id"; 
$fetch_approved_pateint_status_select = mysqli_query($conn,$fetch_approved_pateint_status_selectQ);

$fetch_approved_pateint_status_data = mysqli_fetch_assoc($fetch_approved_pateint_status_select);


echo $fetch_approved_pateint_status_data['pateint_id']."<br>";
echo $fetch_approved_pateint_status_data['reg_pateint_id']."<br>";
echo $fetch_approved_pateint_status_data['patient_name']."<br>";
echo $fetch_approved_pateint_status_data['patient_email']."<br>";
echo $fetch_approved_pateint_status_data['patient_phone']."<br>";
echo $fetch_approved_pateint_status_data['patient_cnic']."<br>";
echo $fetch_approved_pateint_status_data['patient_age']."<br>";
echo $fetch_approved_pateint_status_data['patient_select_hos']."<br>";
echo $fetch_approved_pateint_status_data['patient_gender']."<br>";
echo $fetch_approved_pateint_status_data['patient_vacc']."<br>";
echo $fetch_approved_pateint_status_data['patient_app_day']."<br>";
echo $fetch_approved_pateint_status_data['pateint_dos_1']."<br>";
echo $fetch_approved_pateint_status_data['pateint_dos_2']."<br>";





?>