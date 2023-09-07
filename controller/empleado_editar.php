<?php
include ('conexion.php');
session_start();
if(isset($_POST['modificar'])){
   $id=$_POST['id']; 
   $nombre = $_POST['nom'];
   $apellido = $_POST['apel'];
   $fecing = $_POST['fecing'];
   $contrato = $_POST['cont'];
   $tel = $_POST['tel'];
   $salario = $_POST['sal'];

    //VALIDAR 
    if($nombre== "" OR $apellido=="" OR  $fecing=="" OR $contrato=="" OR  $tel=="" OR  $salario==""){
        $_SESSION['mensaje'] = 'Debes llenar todos los campos';
        $_SESSION['tipo'] = 'danger';
        header('location:../view/admin/empleados.php');
    }else{
        require("conexion.php");
        //MODIFICAR
        $modificar = "UPDATE empleados SET nom = '$nombre', apel = '$apellido',fecing = '$fecing', cont = $contrato, tel = $tel, sal = $salario  WHERE id_emp = $id";
        $resultado = mysqli_query($db,$modificar); 
        /* SUBIDO */
        if ($resultado){
        $_SESSION['mensaje'] = 'Datos de empleado modificados exitosamente!';
        $_SESSION['tipo'] = 'success';
        header('location:../view/admin/empleados.php');
    }
    /* ERROR */
    else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/empleados.php');
    }
    }
   }
?>