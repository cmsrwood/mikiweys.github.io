<?php
require('login.php');
if ($_SESSION['rol'] != '2'){
    header('location:../../index.php');
}
?>