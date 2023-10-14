<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKIWEY'S APP</title>
    <!-- LINKS -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">

    <!-- LIBRERIAS CSS -->  
    <?php include ('../../view/include/boostrap.php');?>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <!-- LOGO ICON -->
    <?php include ('../../view/include/logo.php');?>

    <!-- META  -->
    <meta name="description" content="Panaderia Mikiweys">
</head>
    
<body> 
<!-- Father -->
<div class="padre">  
<?php include('../include/header.php'); ?>

</div>
<div class="p-5 mt-5 container color shadow">  
    <div class="border-bottom border-dark">
    <h1 class="pt-5 poppins">Mi carrito () <i class="bi bi-cart3"></i></h1>
    </div>    
<div class="container d-flex">
  <div class="row align-items-start d-flex pe-5">
    <!-- COLUMNAS -->
  <div class="col-12 d-flex border-bottom border-dark py-3">
    <img src="..../../IMG/producto.jpg" alt="" class="rounded-5 w-25 p-2">
    <div class="d-block">
      <h3 class="mx-5 py-5">NOMBRE PRODUCTO</h2>
      <h4 class="mx-5 py-2 poppins">$precio</h2>
    </div>
    </div> 
  <!--  -->
    <div class="col-12 d-flex border-bottom border-dark py-3">
      <div>
      <img src="..../../IMG/producto.jpg" alt="" class="rounded-5 w-25 p-2">
        <div class="d-block">
        <h3 class="mx-5 py-5">NOMBRE PRODUCTO</h2>
        <h4 class="mx-5 py-2 poppins">$precio</h2>
        </div>
      </div>
    </div>
  </div>
<!--  -->
<div class="container border-start p-5 ">

</div>
</div> 
</div>
</body>
</html>
