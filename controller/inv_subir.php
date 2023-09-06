<?php
include('conexion.php');
session_start();
if(isset($_POST['guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $producto = $_POST['producto'];
    $preuni = $_POST['preuni'];
    $cat = $_POST['cat'];
    $cant = $_POST['cant'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, jpg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../view/admin/inventario.php');
       }else{
        $query = $db->query("INSERT INTO inventario(imagen,producto,preuni,cat,cantidad) values('$imagen','$producto','$preuni','$cat','$cant')");
         $resultado = $query;
         if($resultado){
            move_uploaded_file($temp,'../IMG/inventario/'.$imagen);   
            $_SESSION['mensaje'] = 'Producto subido exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/inventario.php');
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location: ../view/admin/inventario.php');
         }
       }
    }
}


?>