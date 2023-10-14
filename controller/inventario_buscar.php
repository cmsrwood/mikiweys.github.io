<?php
if(isset($_POST['buscar'])){
    $salario = $_POST['buscador'];

    if(!empty($_POST['buscador'])){
        include_once('../model/inventario_buscar.php');

         if($buscar){
            $_SESSION['mensaje'] = 'Producto buscado';
            $_SESSION['tipo'] = 'success';
            header('location:../view/admin/inventario.php');
         }else{
            $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/admin/inventario.php');
         }
      }else {
         header('location:../view/admin/inventario.php');
      }
   }
?>