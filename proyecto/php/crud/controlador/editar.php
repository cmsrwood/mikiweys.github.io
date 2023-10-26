<?php

if (!empty($_POST['btnsubir'])) {
	if (!empty($_POST['fecha']) and !empty($_POST['descrip'])) {
		$id=$_POST['id'];
		$fecha=$_POST['fecha'];
		$descrip=$_POST['descrip'];
		$sql=$conexion->query(" update crudphp set fecha='$fecha', descripcion='$descrip' where id_circular=$id ");
		if ($sql==1) {
			header("Location: index.php");
		} else {
			echo "<div class='alert alert-danger'>Error al modificar circular</div>";
		}
		
	}else{
		echo "<div class='alert alert-warning'>Campos vacios</div>";
	}
}

?>