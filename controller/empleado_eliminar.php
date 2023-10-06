<?php
include ('conexion.php');
    $id =$_GET['id'];
    $eliminar = "DELETE FROM empleados WHERE id_emp='$id'";
    $resultado = mysqli_query($db,$eliminar); 
    /* ELIMINADO */
    if ($resultado){
    $_SESSION['mensaje'] = 'Empleado eliminado';
    $_SESSION['tipo'] = 'danger';
    header('location:../view/admin/empleados.php');
}

?>