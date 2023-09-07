<?php

    require("conexion.php");
    $id =$_GET['id'];

    $eliminar = "DELETE FROM inventario WHERE id_inv='$id'";
    $db->query($eliminar);

    echo "<script> alert('Articulo Eliminado') </script>";
    echo '<script> location.href="../view/admin/inventario.php" </script>';

?>