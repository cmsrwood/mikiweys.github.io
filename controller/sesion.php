<?php 
require('login.php');
$query = $db->query("SELECT * FROM usuarios WHERE id_user= $usuario[rol_user]");
$resultado = $query;
$usuario = mysqli_fetch_assoc($resultado);
$_SESSION['nom'] = $usuario['name_user'];
$_SESSION['apel'] = $usuario['apel_user'];
$_SESSION['tel'] = $usuario['tel_user'];    
$_SESSION['id_doc'] = $usuario['num_documento_user'];
$_SESSION['doc'] = $usuario['id_user'];
$_SESSION['mail'] = $usuario['email_user'];
$_SESSION['rol'] = $usuario['rol_user'];
$_SESSION['dir'] = $usuario['dir_user'];