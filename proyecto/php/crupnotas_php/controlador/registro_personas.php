<?php

if (!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"])  and !empty($_POST["apellido"]) and !empty($_POST["curso"]) and !empty($_POST["notas"]) and !empty($_POST["nota"]) and !empty($_POST["notass"]) and !empty($_POST["notaa"]) and !empty($_POST["observaciones"]) and !empty($_POST["fecha"]) and !empty($_POST["nombre_doce"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $curso=$_POST["curso"];
        $notas=$_POST["notas"];
        $nota=$_POST["nota"];
        $notass=$_POST["notass"];
        $notaa=$_POST["notaa"];
        $observaciones=$_POST["observaciones"];
        $fecha=$_POST["fecha"];
        $nombre_doce=$_POST["nombre_doce"];

        $sql=$conexion->query("insert into notas(nombre,apellido,curso,notas,nota,notass,notaa,observaciones,fecha,nombre_doce)values ('$nombre','$apellido','$curso','$notas','$nota','$notass','$notaa','$observaciones','$fecha','$nombre_doce')");
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