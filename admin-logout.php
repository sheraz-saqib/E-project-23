
<?php
session_start();

if($_SESSION['admin_name'] && $_SESSION['admin_name'] == true){
    unset($_SESSION['admin_name']);
    session_destroy();
} 
?>

<script>
    window.location.assign('login.php');
</script>