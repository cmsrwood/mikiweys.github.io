<?php
include ('conexion.php');
session_start();
    $id =$_GET['id'];
    $eliminar = "DELETE FROM inventario WHERE id_inv='$id'";
    $resultado = mysqli_query($db,$eliminar); 
    /* ELIMINADO */
    if ($resultado){
    $_SESSION['mensaje'] = 'Producto eliminado';
    $_SESSION['tipo'] = 'danger';
    header('location:../view/admin/inventario.php');
}

?>