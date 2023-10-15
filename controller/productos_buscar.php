<?php
include('conexion.php');
if(isset($_POST['buscar'])){
    $buscador = $_POST['buscador'];

    if(!empty($_POST['buscador'])){
         header("location:../view/user/productos.php?search=$buscador");
      }
   else{
         header('location:../view/user/productos.php');
      }
   }
?>