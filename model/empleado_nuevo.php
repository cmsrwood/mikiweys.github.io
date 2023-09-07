<?php 
$query = "INSERT INTO empleado(nom,apel,fecing,cont,tel,sal) values('$nombre','$apellido','$fecing','$contrato','$tel','$salario')";
$resultado = mysqli_query($db,$query);
?>