<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"])  and !empty($_POST["apellido"]) and !empty($_POST["curso"]) and!empty($_POST["fecha"]) and!empty($_POST["correo"])) {

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $curso=$_POST["curso"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query("insert into persona(nombre,apellido,curso,fecha,asistio)values ('$nombre','$apellido','$curso','$fecha','$correo')");
        if($sql==1){
            echo '<div class="alert alert-success">persona registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger>error al registrar persona</div>';
        }

    }else{
        echo '<div class="alert alert-warning>alguno de los campos esta vacio</div>';
    }
}

?>