<?php
//conexion
    include('conexion.php');
    //
    session_start();
        if(!empty($_POST['mail']) && !empty($_POST['pass'])){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $query = $db->query("SELECT * FROM usuarios WHERE email_user='$mail'");
            $resultado = $query;
            if ($resultado->num_rows == 1) {
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['id'] = $usuario['id_user'];
            }
            if (password_verify($pass, $usuario['pass_user'])) {
            /*  */


                switch ($usuario['rol_user']){
                    case '1':
                        //administrador
                        header("location: ../view/admin/inventario.php");
                        break;
                    case '2':
                        //empleado
                        header("location: ../view/empleado/ventas.php");
                        break;
                    case '3':
                        //clientes
                        header("location: ../index.php");
                        break;
            }
        }
          else {
            $_SESSION['maile'] = 'Correo electrónico o contraseña incorrectos.';
            header('location: ../view/login.php');
        }
    }
        else {
        $_SESSION['debes'] = 'Debes completar todos los campos.';
        }


?>