<?php
include ('conexion.php');
require('verficacion_user_admin.php');
if(isset($_POST['modificar'])){
   $id=$_POST['id']; 
   $producto = $_POST['productom'];
   $preuni = $_POST['preunim'];
   $cat = $_POST['catm'];
   $cant = $_POST['cantm'];
   $desc = $_POST['descripm'];

    //VALIDAR QUE EL USUARIO REGISTRE TODOS LOS CAMPOS QUE SEAN OBLIGATORIOS
    if($producto== "" OR $preuni=="" OR  $cat=="" OR $cant==""){
        $_SESSION['mensaje'] = 'Debes llenar todos los campos';
        $_SESSION['tipo'] = 'danger';
        header('location:../view/admin/inventario.php');
    }else{
        require("conexion.php");
        //MODIFICAR LOS DATOS EN LA TABLA
        $modificar = "UPDATE inventario SET producto = '$producto', preuni = '$preuni', cat = '$cat', cantidad = $cant, descrip= '$desc' WHERE id_inv = $id";
        $resultado = mysqli_query($db,$modificar); 
        /* SUBIDO */
        if ($resultado){
        $_SESSION['mensaje'] = 'Producto modificado exitosamente!';
        $_SESSION['tipo'] = 'success';
        header('location:../view/admin/inventario.php');
    }
    /* ERROR */
    else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/inventario.php');
    }
    }
   }
?>