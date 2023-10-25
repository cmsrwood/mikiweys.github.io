<?php
$host = "localhost";
$user = "root";
$pass = "";

$db = "conline";
$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    echo "conexion fallida";
}
?>