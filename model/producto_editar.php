<?php 
$query = "UPDATE inventario SET producto = 'imagen', preuni='$preuni', cat='$cat', cantidad='$cant' WHERE inventario.id_inv = 1;";
$resultado = mysqli_query($db,$query);
?>