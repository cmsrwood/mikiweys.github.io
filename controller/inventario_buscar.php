<?php
include('conexion.php');
if(isset($_POST['buscar'])){
    $salario = $_POST['buscador'];

    if(!empty($_POST['buscador'])){
        include_once('../model/inventario_buscar.php');

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