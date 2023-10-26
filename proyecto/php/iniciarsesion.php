<?php
//conexion
    include('conexion2.php');
    //
    session_start();
if(isset($_POST['iniciar'])){
        if(!empty($_POST['usuario']) && !empty($_POST['pass'])){
            $user = $_POST['usuario'];
            $pass = $_POST['pass'];
            $query = $conn->query("SELECT * FROM registro WHERE num_doc='$user'");
            $resultado = $query;
            if ($resultado->num_rows == 1) {
            $usuario = mysqli_fetch_assoc($resultado);
            }
            if ($usuario['contrasena']== $pass)  {
            /*  */

            header("location: ../html/estudiantes.html");

        }
          else {
           echo 'Correo electrónico o contraseña incorrectos.';
            header('location: iniciosesion.php');
        }
}
        else {
       echo 'Debes completar todos los campos.';
        header('location: iniciosesion.php');
        }
    }


?>