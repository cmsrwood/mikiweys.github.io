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
        $sql=$conexion->query(" update notas set nombre='$nombre',apellido='$apellido', curso='$curso' ,notas='$notas' ,nota='$nota' ,notass='$notass' ,notaa='$notaa' ,observaciones= '$observaciones', fecha='$fecha',nombre_doce='$nombre_doce' where id_notas=$id");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>error al modidificar</div>";
        }
        
    }else {
        echo "<div class='alert alert-warning'>campos vacios</div>";
    }
}

?>