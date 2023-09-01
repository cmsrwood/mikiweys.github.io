<?php
// Iniciar sesión
session_start();
 
// Conexión a la base de datos
 include('conexion.php');
// Si se ha enviado el formulario
if (isset($_POST['login_button'])) {
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
 
  // Comprobar si el nombre de usuario es válido
  $query = "SELECT * FROM users WHERE username='$username'";
  $results = mysqli_query($db, $query);
 
  if (mysqli_num_rows($results) == 1) {
    // Nombre de usuario válido, verificar contraseña
    $row = mysqli_fetch_assoc($results);
    if (password_verify($password, $row['pass'])) {
      // Inicio de sesión válido
      $_SESSION['username'] = $username;
      header('location: home.phtml');
    } else {
      // Contraseña inválida
      $errors[] = "Nombre de usuario/contraseña inválidos";
    }
  } else {
    // Nombre de usuario inválido
    $errors[] = "Nombre de usuario/contraseña inválidos";
  }
}
?>
