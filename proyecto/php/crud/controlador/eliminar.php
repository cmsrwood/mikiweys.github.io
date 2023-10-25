<?php

if (!empty($_GET["id"])) {
	$id=$_GET["id"];
	$sql=$conexion->query(" delete from crudphp where id_circular=$id ");
	if ($sql==1) {
		echo '<div class="alert alert-success">Circular eliminada correctamente</div>';
	} else {
		echo '<div class="alert alert-danger">Error al eliminar</div>';
	}
	
}

?>