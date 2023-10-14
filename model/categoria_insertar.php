<?php 
$query = "INSERT INTO categoria(imagen,categoria) values('$imagen','$categoria')";
$resultado = mysqli_query($db,$query);
?>