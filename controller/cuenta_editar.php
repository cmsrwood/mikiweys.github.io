<?php
include ('conexion.php');
if(isset($_POST['modificar'])){
    require('login.php');
    $id= $_SESSION['id'];
   $nombre = $_POST['nomb'];
   $apellido = $_POST['apel'];
   $correo = $_POST['corr'];
   $telefono = $_POST['tele'];
   $direccion = $_POST['dire'];

    //VALIDAR 
    if($nombre== "" OR $apellido=="" OR  $correo=="" OR $telefono=="" OR  $direccion==""){
        $_SESSION['mensaje'] = 'Debes llenar todos los campos';
        $_SESSION['tipo'] = 'danger';
        header('location:../view/user/cuenta.php');
    }else{
        //MODIFICAR
        $modificar = "UPDATE usuarios SET name_user = '$nombre', apel_user = '$apellido',tel_user = '$telefono', email_user = '$correo', dir_user = '$direccion'  WHERE id_user = '$id'";
        $resultado = mysqli_query($db,$modificar); 
        
        /* SUBIDO */
        if ($resultado){
        $_SESSION['m'] = 'Datos modificados exitosamente!';
        $_SESSION['tipo'] = 'success';
        header('location:../view/user/cuenta.php');
    }
    /* ERROR */
    else{
        $_SESSION['m'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/user/cuenta.php');
    }
    }
   }
?>