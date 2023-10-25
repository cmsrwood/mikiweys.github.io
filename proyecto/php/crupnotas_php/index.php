<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="..//../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
     <!-- css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c0bbb489ef.js" crossorigin="anonymous"></script>
</head>
<body >

    <nav class="navbar navbar-expand-lg bgm">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">EntreNubesSurOriental</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.html">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Otros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="#">Nosotros <i class="bi bi-people-fill"></i></a></li>
                  <li><a class="dropdown-item" href="#">Ayuda
                  </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     
<div class="container-fluid bgm">
    <div class="container bga">
        <h1 class="text-center comida">COLEGIO EN LÍNEA</h1>
    </div>
</div>
<div class="container bgm">
    <h1 class="text-center">SUBIR NOTAS</h1>
</div>
<div class="container"></div>
</div>
<div class="col text-center lele 5 ">
</div>
  <div class="row">

    <script>
      function eliminar(){
        var respuesta= confirm("Estas seguro que deseas eliminar");
        return respuesta
      }
    </script>

    <?php
    include ('modelo/conexion.php');
     include ('controlador/eliminar.php');
    ?>
    <div class="container-fluid row">
      <form class=" col-4 p-4 bga" method="POST" >
         <h3 class="text-center text_secondary">Registro de notas</h3>
         <?php
         include ('modelo/conexion.php');
         include ('controlador/registro_persona.php');
          ?>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">nombre del estudiante</label>
         <input type="text" class="form-control"  name="nombre">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">apellido del estudiante</label>
         <input type="text" class="form-control"  name="apellido">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Curso</label>
         <input type="text" class="form-control"  name="curso">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">NOTAS</label>
         <input type="text" class="form-control"  name="notas">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="nota">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="notass">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="notaa">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">observaciones</label>
         <input type="text" class="form-control"  name="observaciones">
     </div>
    <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"> Fecha </label>
         <input type="date" class="form-control"  name="fecha">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Nombre del docente</label>
         <input type="text" class="form-control"  name="nombre_doce">
     </div>

     <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">registrar</button>
      </form>
      <div class="col-8 p-4 ">
      <table class="table">
  <thead class="bg-info">
    <tr class="">
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CURSO</th>
      <th scope="col">NOTAS</th>
      <th scope="col">NOTAS</th>
      <th scope="col">NOTAS</th>
      <th scope="col">NOTAS</th>
      <th scope="col">OBSERVACIONES</th>
      <th scope="col">FECHA</th>
      <th scope="col">NOMBRE DEL DOCENTE</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql = $conexion->query("select * from notas");
    while($datos = $sql->fetch_object()) { ?>
        <tr>
      <td><?= $datos-> id_notas?></td>
      <td><?= $datos-> nombre?></td>
      <td><?= $datos-> apellido?></td>
      <td><?= $datos-> curso?></td>
      <td><?= $datos-> notas?></td>
      <td><?= $datos-> nota?></td>
      <td><?= $datos-> notass?></td>
      <td><?= $datos-> notaa?></td>
      <td><?= $datos-> observaciones?></td>
      <td><?= $datos-> fecha?></td>
      <td><?= $datos-> nombre_doce?></td>
      <td>
        <a href="modificar.php?id=<?= $datos-> id_notas?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a onclick="return eliminar()" href="index.php?id=<?= $datos-> id_notas?>" class="btn btn-small btn-info"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
  <?php }
    ?>
   
  </tbody>
</table>
      </div>
    </div>
    



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>