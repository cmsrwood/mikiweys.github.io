<?php
  include ('../../controller/conexion.php');
?>
<?php 
require('../../controller/conexion.php');

if(isset($_GET['search'])) {
  $busqueda=$_GET["search"];
  $mostrarArticulos = "SELECT * from inventario WHERE producto LIKE '%$busqueda%'";
  $query = $db->query($mostrarArticulos);
  $inventario = $query;
}
else{
  include('../../model/inventario_select_all.php');

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - MIKIWEY'S APP</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
</head>
<body data-bs-theme="light"> 

<!-- HEADER -->
<?php include('../include/header.php'); ?>
<!-- BUSCADOL -->

<div class="container justify-content-center mt-5 pt-5" id="main">
  <div class="row align-items-center pt-5">
  <form action="../../controller/productos_buscar.php" method="POST" class="form-inline d-flex">
    <div class="col-8">
    <input name="buscador" placeholder="Busca tu producto" class="form-control mr-sm-2" type="search" aria-label="Search">
    </div>

    <div class="col">
      <input class="btn btn-warning text-white" value="Buscar"  type="submit" name="buscar">
    </div>
    <div class="col ">
      <div class="dropdown">
        <a class="text-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ordenar por
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item py-1" href="#">Mas relevante</a></li>
          <li><a class="dropdown-item py-1" href="#">Mayor precio</a></li>
          <li><a class="dropdown-item py-1" href="#">A-Z</a></li>
          <li><a class="dropdown-item py-1" href="#">Z-A</a></li>
        </ul>
      </div>
    </div>
   </form>


  </div>
</div>


<!-- PRODUCTOS -->
<div class="container p-5 shadow d-flex color" id="main">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <!--  -->
    <?php foreach($inventario as $producto){ ?>
      <div class="col mb-3">
      <div class="card m-auto">
        <img src="../../IMG/inventario/<?php echo $producto['imagen']; ?>" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title"><?php echo $producto['producto']; ?></h5>
          <p class="card-text ">$<?php echo $producto['preuni']; ?></p>
          <p class="card-text"><?php echo $producto['cat'];?></p>
          <a href="producto.php?id=<?=$producto['id_inv']?>" class="btn bordenaranja naranja bhovernaranja">Comprar</a>
        </div>
      </div>
    </div>
  <?php }?>
</div>  
</div>


<!-- FOOTER -->

<footer class="bnaranja text-center text-white ">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
          <i class="bi bi-facebook"></i>
        </a>
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
          <i class="bi bi-twitter"></i>
        </a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="" role="button">
          <i class="bi bi-instagram"></i>
        </a>
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://github.com/mikiweys/mikiweys.github.io" role="button">
          <i class="bi bi-github"></i>
        </a>
      </section>
      <!-- Section: Social media -->
    </div>
  </footer>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- MY JS -->
    <script src="../../js/script.js"></script>
</body>
</html>
