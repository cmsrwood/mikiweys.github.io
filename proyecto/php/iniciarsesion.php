 <?php
    
 include('conexion2.php');
 if(isset($_POST['iniciar'])){
    if(!empty($_POST['mail']) && !empty($_POST['pass'])){
        $doc = $_POST['usuario'];
        $pass = $_POST['contraseña'];
        $query = $conn->query("SELECT * FROM registro WHERE num_doc='$doc'");
        $resultado = $query;
        if ($resultado->num_rows == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        }
        if ($pass = $usuario['contrasena']) {

                    header("location: estudiantes.html");

        }
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



    ?>
<


