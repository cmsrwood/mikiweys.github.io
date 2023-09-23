<?php 
$query = "INSERT INTO inventario(imagen,producto,descrip,preuni,cat,cantidad) values('$imagen','$producto','$desc','$preuni','$cat','$cant')";
$resultado = mysqli_query($db,$query);
?>