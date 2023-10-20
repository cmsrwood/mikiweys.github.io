<?php
require('sesion.php');
switch ($usuario['rol_user']){
    case '1':
        //administrador
        header("location: ../view/admin/inventario.php");
        break;
    case '2':
        //empleado
        header("location: ../view/empleado/index.php");
        break;
    case '3':
        //clientes
        header("location: ../index.php");
        break;
}
?>