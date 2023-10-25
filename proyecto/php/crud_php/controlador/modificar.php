<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"])  and !empty($_POST["apellido"]) and !empty($_POST["curso"]) and!empty($_POST["fecha"]) and!empty($_POST["correo"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $curso=$_POST["curso"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];
        $sql=$conexion->query(" update persona set Nombre='$nombre',apellido='$apellido', curso=$curso, fecha='$fecha',asistio='$correo' where id_persona=$id");
        if ($sql==1) {
            header("location:idex.php");
        } else {
            echo "<div class='alert alert-danger'>error al modidificar</div>";
        }
        
    }else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}

?>