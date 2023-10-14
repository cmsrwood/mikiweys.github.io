<?php
include('conexion.php');
if(isset($_POST['agregar'])){
    $fecha = $_POST['fecha'];
    $produ = $_POST['produ'];
    $cant = $_POST['cant'];
    $preuni = $_POST['preuni'];
    $total = $_POST['total'];

    if(!empty($_POST['fecha']) && !empty($_POST['produ']) && !empty($_POST['cant']) && !empty($_POST['preuni']) && !empty($_POST['total']) ){
       

         if($resultado){
            $_SESSION['alerta'] = 'Venta agregada exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/empleados.php');
         }else{
            $_SESSION['alerta'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/empleados.php');
         }
      }else {
         $_SESSION['alerta'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/admin/empleados.php');
      }
   }
?>