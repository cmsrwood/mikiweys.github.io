<?php
//conexion
    include('conexion.php');
    //
    session_start();
        if(!empty($_POST['mail']) && !empty($_POST['pass'])){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $query = $db->query("SELECT * FROM usuarios WHERE email_user='$mail' AND pass_user='$pass'");
            $resultado = $query;
            if ($resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
    
            /*  */

                $_SESSION['id'] = $usuario['id_user'];
                $_SESSION['nom'] = $usuario['name_user'];
                $_SESSION['apel'] = $usuario['apel_user'];
                $_SESSION['tel'] = $usuario['tel_user'];
                $_SESSION['id_doc'] = $usuario['num_documento_user'];
                $_SESSION['doc'] = $usuario['id_user'];
                $_SESSION['mail'] = $usuario['email_user'];
                $_SESSION['rol'] = $usuario['rol_user'];

                switch ($usuario['rol_user']){
                    case '1':
                        //administrador
                        header("location: ../view/admin/empleados.php");
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
            $alerta = '<div class="alert alert-danger text-center my-3">
        <p>DEBES COMPLETAR TODOS LOS CAMPOS</p>
        </div>';
        echo ($alerta);
        }
?>

