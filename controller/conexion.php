<?php
$PDO = new PDO("mysql:host=localhost;dbname=mikiweys", 'root', '');
// set the PDO error mode to exception
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>