<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado view\empleado\index.php</title>
    <?php  include ('../include/boostrap.php')?>
</head>
<body>
     <div class="container">
<h1 class="text-center">¡Hola Brayan Carmona!</h1>
<p class="text-center">¡Bienvenido a tu lugar de trabajo!</p>
       <div class="row">

     <div class="card text-center col-5 mx-auto my-4 bg-warning bg-opacity-10 ">
  <div class="card-body">
    <h5 class="card-title">Ventas</h5>
    <p class="card-text">En este lugar puedes ver todas las ventas realizadas anteriormente.</p>
    <a href="ventas.php" class="btn btn-outline-warning bg-white">Ir <i class="bi bi-car-front"></i></a>

  </div>
</div>
<div class="card text-center col-5  mx-auto  my-4 bg-warning bg-opacity-10">
  <div class="card-body">
    <h5 class="card-title">Horarios</h5>
    <p class="card-text">Aca puedes ver tus horarios semanales.</p>
    <a href="horario.php" class="btn btn-outline-warning bg-white">Ir <i class="bi bi-car-front"></i></a>

  </div>
</div>
<div class="card text-center col-5  mx-auto my-4 bg-warning bg-opacity-10">
  <div class="card-body">
    <h5 class="card-title">Registro de compras</h5>
    <p class="card-text">Aca veras las compras hechas anteriormente.</p>
    <a href="ventas.php" class="btn btn-outline-warning bg-white">Ir <i class="bi bi-car-front"></i></a>

  </div>
</div>
<div class="card text-center col-5  mx-auto  my-4 bg-warning bg-opacity-10">
  <div class="card-body">
    <h5 class="card-title">Tu informacion</h5>
    <p class="card-text">Revisa tu informacion.</p>
    <a href="informacion.php" class="btn btn-outline-warning bg-white">Ir <i class="bi bi-car-front"></i></a>

  </div>
</div>
</div>

     </div>
</body>
</html>