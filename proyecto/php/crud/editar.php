<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from crudphp where id_circular=$id ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Editar circular</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controlador/editar.php";
            while($datos=$sql->fetch_object()){ ?>
            <div class="mb-3">
                 <label for="fecha" class="form-label">Fecha</label>
                 <input type="date" class="form-control" value="<?= $datos->fecha ?>" name="fecha">
            </div>
            <div class="mb-3">
                 <label for="descrip" class="form-label">Descripción</label>
                 <input type="text" class="form-control" value="<?= $datos->descripcion ?>" name="descrip" size="10">
            </div>
            <?php } 
            ?>
          <a href="http://localhost/crudd/editar.php?id=0">
<button type="submit" class="btn btn-danger" name="btnsubir" value="ok">Subir</button> </button>
            </a>
        </form>
</body>
</html>