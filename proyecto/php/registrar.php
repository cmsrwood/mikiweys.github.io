<?php
include_once("conexion.php");

if(!empty($_POST['registrar'])){

    $name = $_POST['nom'];
    $apel = $_POST['apel'];
    $fecha = $_POST['date'];
    $doctype = $_POST['doctype'];
    $numdoc = $_POST['numdoc'];
    $roll = $_POST['roll'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    

    $sql = "INSERT INTO registro(nombre,apellido,fecha_nac,tip_doc_id,num_doc,rol_id,telefono,correo,contrasena) VALUES (:nombre,:apel,:fecha,:doctype,:numdoc,:roll,:tel,:email,:pass)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(":nombre",$name);
    $stmt->bindParam(":apel",$apel);
    $stmt->bindParam(":fecha",$fecha);
    $stmt->bindParam(":doctype",$doctype);
    $stmt->bindParam(":numdoc",$numdoc);
    $stmt->bindParam(":roll",$roll);
    $stmt->bindParam(":tel",$tel);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":pass",$pass);




    if($stmt->execute()){
        header("location: index.html");
    } else print ("Error en la consulta");
} else {
    echo('<div class="alert alert-danger">Completa todos los campos </div>');
}
?>