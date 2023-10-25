<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from persona where id_persona=$id ");
    if ($sql==1) {

    }else {
        echo '<div class="alert alert-danger">error al eliminar</div>';
    }
} 

?>

