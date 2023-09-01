<?php
//conexion
    include('conexion.php');
    session_start();
//inicio por
    if(isset($_SESSION['iniciar'])){
        if($_POST['mail']!='' && $_POST['pass']!=''){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $query = $PDO->prepare("SELECT * FROM usuarios");
            $query->execute();
            $resultado = $query;
            $rol = $PDO->prepare("SELECT * FROM `usuarios` WHERE rol=1");
            $rol->execute();
            $resulrol = $rol;
            if ($query->rowCount() == 0){
            switch ($resultado){
                case '1':
                    //administrador
                    header("location: admin/empleados.php");
                    break;
                case '2':
                    //empleado
                    header("location: empleado/Ventas.php");
                    break;
                case '3':
                    //clientes
                    header("location: user/registro.php");
                    break;
        }
        }
        else{
            $mensaje = 'Usuario y/o clave incorrecta';
        }
    }
  }
?>

