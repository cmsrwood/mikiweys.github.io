<?php
require('login.php');
if ($_SESSION['rol'] != '1'){
    header('location:../../index.php');
}
?>