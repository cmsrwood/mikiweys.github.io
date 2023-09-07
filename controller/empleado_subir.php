<?php
include('conexion.php');
session_start();
if(isset($_POST['agregar'])){
    $id=$_POST['id']; 
    $nombre = $_POST['nom'];
    $apellido = $_POST['apel'];
    $fecing = $_POST['fecing'];
    $contrato = $_POST['cont'];
    $tel = $_POST['tel'];
    $salario = $_POST['sal'];

    if(!empty($_POST['nom']) && !empty($_POST['apel']) && !empty($_POST['fecing']) && !empty($_POST['cont']) && !empty($_POST['tel']) && !empty($_POST['sal'])){
        include_once('../model/empleado_nuevo.php');
         if($resultado){
            $_SESSION['mensaje'] = 'Empleado agregado exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/empleados.php');
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/empleados.php');
         }
      }else {
         $_SESSION['mensaje'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/admin/empleados.php');
      }
   }
?>