<?php

if (!empty($_POST["btnsubir"])) {
	if (!empty($_POST["fecha"]) and !empty($_POST["descrip"])) {
		
		$fecha=$_POST["fecha"];
		$descrip=$_POST["descrip"];

		$sql=$conexion->query("insert into crudphp(fecha,descripcion)values('$fecha','$descrip')");
		if ($sql==1) {
			echo '<div class="alert alert-success">Circular subida correctamente</div>';
		} else {
			'<div class="alert alert-danger">Error al subir</div>';
		}
		

	}else{
		'<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
	}
}

?>