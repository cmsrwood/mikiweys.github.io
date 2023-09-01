
<?php
$PDO = new PDO("mysql:host=localhost;dbname=mikiweys", 'root', '');
// 
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db = mysqli_connect('localhost', 'root', '', 'mikiweys');
?>