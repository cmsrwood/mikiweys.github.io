<?php 
$query = "INSERT INTO empleados(nom,apel,fecing,cont,tel,sal,hor,email) values('$nombre','$apellido','$fecing','$contrato','$tel','$salario','$hor','$mail') ;
UPDATE usuarios SET rol_user = 2 WHERE email_user = ''$mail;
";
$resultado = mysqli_query($db,$query);  
?>