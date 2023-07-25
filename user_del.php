<?php
require 'conn.php';
$userDelId = $_GET['DelId'];


$DelQ = "DELETE FROM `user` WHERE `id`=$userDelId";

$Del = mysqli_query($conn,$DelQ);
?>
<script>
    window.location.assign('admin_user_detail.php')
</script>