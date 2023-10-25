<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD de notas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5dc5c97412.js" crossorigin="anonymous"></script>
</head>

<body>
  <script>
    function eliminar(){
      var respuesta=confirm("Estas seguro que deseas eliminar?");
      return respuesta
    }
  </script>
	  <h1 class="text-center p-3">Circulares</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar.php";
    ?>
	  <div class="container-fluid row">
	      <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Subir circular</h3>
            <?php
            include "controlador/subircirc.php";
            ?>
            <div class="mb-3">
                 <label for="fecha" class="form-label">Fecha</label>
                 <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                 <label for="name" class="form-label">Descripción</label>
                 <input type="text" class="form-control" name="descrip" size="10">
            </div>
            <a href="index.php">
<button type="submit" class="btn btn-danger" name="btnsubir" value="ok">Subir</button> </button>
            </a>

        </form>
    <div class="col-8 p-4">
        <table class="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">FECHA</th>
            <th scope="col">DESCRIPCIÓN DE CIRCULAR</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
         <?php
          include "modelo/conexion.php";
          $sql = $conexion->query(" select * from crudphp");
          while ($datos = $sql->fetch_object()) { ?>
          <tr>
            <td><?= $datos->id_circular ?></td>
            <td><?= $datos->fecha ?></td>
            <td><?= $datos->descripcion ?></td>
            <td>
            </td>
            <td>
              <a href="editar.php?id=<?= $datos->id_circular ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
              <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_circular ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <?php }
        ?>

        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>