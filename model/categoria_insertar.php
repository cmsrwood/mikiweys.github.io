<?php 
$query = "INSERT INTO categorias(categoria,imagen) values('$categoria','$imagen')";
$resultado = mysqli_query($db,$query);
?>