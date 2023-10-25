<?php
 include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select * from notas where id_notas=$id ");

?>
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
                <a class="nav-link active text-light" aria-current="page" href="../index.html">Inicio</a>
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
    <h1 class="text-center">Modificar asistencia</h1>
</div>
<div class="container"></div>
</div>
<div class="col text-center lele 5 ">
</div>
  <div class="row">

<form class=" col-4 p-4 m-auto bgn" method="POST" >
         <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
         <?php
        include ('controlador/modificar.php');
         while($datos = $sql->fetch_object()) { ?>
              <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">nombre de la persona</label>
         <input type="text" class="form-control"  name="nombre" value="<?= $datos->nombre ?>">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
         <input type="text" class="form-control"  name="apellido"value="<?= $datos->apellido ?>">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Curso</label>
         <input type="text" class="form-control"  name="curso"value="<?=  $datos-> curso ?>">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">NOTAS</label>
         <input type="text" class="form-control"  name="notas"value="<?=  $datos-> notas ?>">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="nota"value="<?=  $datos-> nota ?>">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="notass"value="<?=  $datos-> notass ?>">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"></label>
         <input type="text" class="form-control"  name="notaa"value="<?=  $datos-> notaa ?>">
     </div> <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">observaciones</label>
         <input type="text" class="form-control"  name="observaciones"value="<?=  $datos-> observaciones ?>">
     </div>
    <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label"> Fecha </label>
         <input type="date" class="form-control"  name="fecha"value="<?= $datos-> fecha ?>">
     </div>
     <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Nombre del docente</label>
         <input type="text" class="form-control"  name="nombre_doce"value="<?= $datos-> nombre_doce ?>">
     </div>
         <?php
         }
          ?>


     <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
      </form>
</body>
</html>