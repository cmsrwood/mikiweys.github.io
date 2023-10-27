<?php
include('login.php');

if(isset($_POST['agregar'])){
    $nombre = $_POST['nom'];
    $apellido = $_POST['apel'];
    $fecing = $_POST['fecing'];
    $contrato = $_POST['cont'];
    $tel = $_POST['tel'];
    $salario = $_POST['sal'];
    $hor= $_POST['hor'];
    $mail = $_POST['mail'];

    if(!empty($_POST['nom']) && !empty($_POST['apel']) && !empty($_POST['fecing']) && !empty($_POST['cont']) && !empty($_POST['tel']) && !empty($_POST['sal'])){
        include_once('../model/empleado_nuevo.php');


         if($resultado){
            $sql = "UPDATE usuarios SET rol_user = '2' WHERE email_user ='$mail'";
            $empu = mysqli_query($db,$sql);  
            $_SESSION['alerta'] = 'Empleado agregado exitosamente!';
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