<?php
include('login.php');
if(isset($_POST['agregar'])){
    $imagen = $_FILES['imagen']['name'];
    $cat = $_POST['categoria'];

    if(isset($imagen) && $imagen != "" && !empty($_POST['categoria'])){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png') ))){
          $_SESSION['alerta'] = 'Solo se permiten archivos jpeg, jpg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location: ../view/admin/categorias.php');
       }else{
        include_once('../model/categoria_insertar.php');
         if($resultado){
            move_uploaded_file($temp,'../IMG/categorias/'.$imagen);   
            $_SESSION['alerta'] = 'Producto subido exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location: ../view/admin/categorias.php');

         }else{
            $_SESSION['alerta'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location: ../view/admin/categorias.php');
         }
       }
    }
      else {
         $_SESSION['alerta'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location: ../view/admin/categorias.php');


      }
}


?>