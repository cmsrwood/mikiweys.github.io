<?php
session_start();
include("conexion.php");

if (!empty($_POST['name_user']) && !empty($_POST['apel_user']) && !empty($_POST['pass_user']) && !empty($_POST['tel_user']) && !empty($_POST['id_doc']) && !empty($_POST['num_documento_user']) && !empty($_POST['email_user']) && !empty($_POST['dir_user'])) {

    $name = $_POST['name_user'];
    $apel = $_POST['apel_user'];
    $pass = $_POST['pass_user'];
    $tel = $_POST['tel_user'];
    $id_doc = $_POST['id_doc'];
    $num_doc = $_POST['num_documento_user'];
    $email = $_POST['email_user'];
    $dir = $_POST['dir_user'];

    $ssql = "SELECT * FROM usuarios WHERE email_user='$email'";
    $result = $db->query($ssql);

    if ($result->num_rows > 0) {
        $_SESSION['mailr'] = "El correo electrónico ya ha sido registrado. Intente iniciar sesión";
        header("location: ../view/user/registro.php");
    } else {
        $insertar = "INSERT INTO usuarios (name_user, apel_user, pass_user, tel_user, id_doc, num_documento_user, email_user, dir_user,rol_user)VALUES ('$name', '$apel', '$pass', '$tel', '$id_doc', '$num_doc', '$email', '$dir','3')";

        if ($db->query($insertar)) {
            header('location: ../index.php');
        } else {
            echo "Error: " . $db->error;
        }
    }
} else {
    $alerta = '<div class="alert alert-danger text-center my-3">
    <p>DEBES COMPLETAR TODOS LOS CAMPOS</p>
        </div>';
    echo ($alerta);
}
?>
