<?php
require('sesion.php');
if ($_SESSION['rol'] != '1'){
    header('location:../../index.php');
}
?>