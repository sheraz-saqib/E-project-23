<?php
session_start();

if($_SESSION['name'] && $_SESSION['name'] == true){
    unset($_SESSION['name']);
    session_destroy();
} 
?>

<script>
    window.location.assign('login.php');
</script>