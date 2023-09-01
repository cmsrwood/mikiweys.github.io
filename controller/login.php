<?php
//conexion
    include('conexion.php');
    session_start();
//inicio por
    if(isset($_SESSION['iniciar'])){
        if($_POST['mail']!='' && $_POST['pass']!=''){
            $mensaje='';
            $dni = $_POST['mail'];
            $clave = $_POST['pass'];
            $rs = $mysqli->query("SELECT * FROM usuarios", MYSQLI_USE_RESULT);
            $fila = mysqli_fetch_row($rs);
            switch ($_SESSION['iniciar']){
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
        }else{
            $mensaje = 'Usuario y/o clave incorrecta';
        }
    }
?>
