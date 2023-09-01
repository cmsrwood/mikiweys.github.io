<?php
// Iniciar sesión
session_start();
 
// Conexión a la base de datos
$db = mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
 
$errors = [];
// Si se ha enviado el formulario
if (isset($_POST['login_button'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 
  // Comprobar si el nombre de usuario es válido
  $query = "SELECT * FROM users WHERE username='$username'";
  $results = mysqli_query($db, $query);
 
  if (mysqli_num_rows($results) == 1) {
    // Nombre de usuario válido, verificar contraseña
    $row = mysqli_fetch_assoc($results);
    if (password_verify($password, $row['password'])) {
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