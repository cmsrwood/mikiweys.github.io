<?php
include('conexion.php');
if(isset($_POST['buscar'])){
    $buscador = $_POST['buscador'];

    if(!empty($_POST['buscador'])){
         header("location:../view/admin/inventario.php?search=$buscador");
      }
   else{
         header('location:../view/admin/inventario.php');
      }
   }
?>