<?php 
$query = "INSERT INTO categoria(categoria,imagen) values('$categoria','$imagen')";
$resultado = mysqli_query($db,$query);
?>