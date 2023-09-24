<?php 
require('login.php');
if(isset($_POST['logout'])){
    session_destroy();
}
?>
