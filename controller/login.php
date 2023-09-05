<?php
//conexion
    include('conexion.php');
    //
    session_start();
        if(!empty($_POST['mail']) && !empty($_POST['pass'])){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $query = $db->query("SELECT * FROM usuarios WHERE email_user='$mail' AND pass_user='$pass'");
            $user = $query;
            if ($user->num_rows == 1) {
              $usuario = $user->fetch_assoc();
              echo($usuario['email_user']);
              echo($usuario['name_user']);
          } 
        }else {
              $_SESSION['mensaje'] = 'Correo electrónico o contraseña incorrectos.';
          }
?>

