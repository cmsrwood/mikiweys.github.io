<?php 
require('login.php');
if(isset($_POST['logout'])){
    session_destroy();
    echo "<script> alert('Sesión cerrada') </script>";
    header( "Refresh:0; url=../index.php", true, 303);
}
?>
