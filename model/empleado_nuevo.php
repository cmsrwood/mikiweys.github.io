<?php 
$query = "INSERT INTO empleados(nom,apel,fecing,cont,tel,sal) values('$nombre','$apellido','$fecing','$contrato','$tel','$salario')";
$resultado = mysqli_query($db,$query);
?>