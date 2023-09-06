<?php
include('conexion.php');
session_start();
if(isset($_POST['modificar'])){
   $imagen = $_FILES['imagenm']['name'];
   $producto = $_POST['productom'];
   $preuni = $_POST['preunim'];
   $cat = $_POST['catm'];
   $cant = $_POST['cantm'];

    if(isset($imagen) && $imagen != "" && !empty($_POST['productom']) && !empty($_POST['preunim']) && !empty($_POST['catm']) && !empty($_POST['cantm'])){
        $tipo = $_FILES['imagenm']['type'];
        $temp  = $_FILES['imagenm']['tmp_name'];
         
       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png') ))){
          $_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, jpg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../view/admin/inventario.php');
       }else{
         $query = "UPDATE inventario SET producto = '$producto', preuni = '$preuni', cat = '$cat', cantidad = $cant WHERE id_inv = $id_inv";
         $resultado = mysqli_query($db,$query);
         if($resultado){
            move_uploaded_file($temp,'../IMG/inventario/'.$imagen);   
            $_SESSION['mensaje'] = 'Producto modificado exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/inventario.php');
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/inventario.php');
         }
       }
    }
      else {
         $_SESSION['mensaje'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/admin/inventario.php');

      }
}


?>