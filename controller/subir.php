<?php
session_start();
include('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location:../view/admin/subirindex.php');
       }else{
         $query = $PDO->prepare("INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')");
         $query->execute();
         $resultado = $query;
         if($resultado){
              move_uploaded_file($temp,'../IMG/productos/'.$imagen);   
             $_SESSION['mensaje'] = 'Producto subido exitosamente!';
             $_SESSION['tipo'] = 'success';
             header('location:../view/admin/subirindex.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>