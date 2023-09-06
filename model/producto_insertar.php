<?php 
$query = "INSERT INTO inventario(imagen,producto,preuni,cat,cantidad) values('$imagen','$producto','$preuni','$cat','$cant')";
$resultado = mysqli_query($db,$query);
?>