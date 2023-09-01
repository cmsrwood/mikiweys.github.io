<?php
    session_start();
//conexion
    include('conexion.php');

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
                    echo '../view/admin/administrador.php';
                    break;
                case '2':
                    //empleado
                    echo '../view/empleado/empleado.php';
                    break;
                case '3':
                    //clientes
                    echo '../view/cliente/cliente.php';
                    break;
        }
        }else{
            $mensaje = 'Usuario y/o clave incorrecta';
        }
    }
?>
