<?php
//conexion
    include('conexion.php');
    //
    session_start();
        if(!empty($_POST['mail']) && !empty($_POST['pass'])){
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];
            $query = $db->query("SELECT * FROM usuarios WHERE email_user='$mail' AND pass_user='$pass'");
            $result = $query;
            if ($result && $result->num_rows > 0) {
              $_SESSION['mailr'] = "El correo electrónico ya ha sido registrado. Intente iniciar sesión";
              header("location: ../view/user/registro.php");
          } 
          
          else {
              $insertar = "INSERT INTO usuarios (name_user, apel_user, pass_user, tel_user, id_doc, num_documento_user, email_user, dir_user,rol_user)VALUES ('$name', '$apel', '$pass', '$tel', '$id_doc', '$num_doc', '$email', '$dir','3')";
      
              if ($db->query($insertar)) {
              } 
          }
          }
          else {
            echo "Error: " . $db->error;
        }
?>

