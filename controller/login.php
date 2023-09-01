<?php
//conexion
    include('conexion.php');
    session_start();
//inicio por
    if(isset($_SESSION['rol'])){
        if($_POST['mail']!='' && $_POST['pass']!=''){
            $mensaje='';
            $dni = $_POST['mail'];
            $clave = $_POST['pass'];
            $rs = $mysqli->query("SELECT * FROM usuarios", MYSQLI_USE_RESULT);
            $fila = mysqli_fetch_row($rs);
            switch ($_SESSION['rol']){
                case '1':
                    //administrador
                    header("location: ../view/user/registro.php");
                    break;
                case '2':
                    //empleado
                    header("location: ../view/user/registro.php");
                    break;
                case '3':
                    //clientes
                    header("location: ../view/user/registro.php");
                    break;
        }
        }else{
            $mensaje = 'Usuario y/o clave incorrecta';
        }
    }
?>
