<?php
include('login.php');
    $id =$_GET['id'];
    $select = "SELECT * FROM empleados WHERE id_emp='$id'";
    $resultado = mysqli_query($db,$select); 
    $empleado = mysqli_fetch_assoc($resultado);
    $mail=$empleado['email'];
    $eliminar = "DELETE FROM empleados WHERE id_emp='$id'";
    $resultado2 = mysqli_query($db,$eliminar); 

    /* ELIMINADO */
    if ($resultado){
    $sql = "UPDATE usuarios SET rol_user = '3' WHERE email_user ='$mail'";
    $emputa = mysqli_query($db,$sql);  
    $_SESSION['alerta'] = 'Empleado eliminado';
    $_SESSION['tipo'] = 'danger';
    header('location:../view/admin/empleados.php');
}

?>