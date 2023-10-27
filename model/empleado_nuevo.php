<?php 
$query = "INSERT INTO empleados(nom,apel,fecing,cont,tel,sal,hor,email) values('$nombre','$apellido','$fecing','$contrato','$tel','$salario','$hor','$mail')";
$resultado = mysqli_query($db,$query);  
?>