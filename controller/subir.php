<?php
include('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['titulo'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'png') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp y png';
          $_SESSION['tipo'] = 'danger';
          header('location:subir.php');
       }else{
         $query = "INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')";
         $resultado = mysqli_query($PDO,$query);
         if($resultado){
              move_uploaded_file($temp,'../IMG/productos/'.$imagen);   
             $_SESSION['mensaje'] = 'Lo hiciste muy bien mi vida!';
             $_SESSION['tipo'] = 'success';
             header('location:subir.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>