<?php 
  include('../../controller/conexion.php');
  $query = $db->query("SELECT * from inventario");
  $resultado = $query;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario | MIKIWEY'S APP</title>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

  <!-- LIBRERÍAS CSS -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../../css/styles.css">

  <!-- LOGO ICON -->
  <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
  <link rel="icon" sizes="192x192" href="../../IMG/todo/logo2.ico">
  <link rel="favicon" href="../../IMG/todo/logo2.ico">
  <link rel="apple-touch-icon" href="../../IMG/todo/logo2.ico">

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="">
  <div class="container my-5 p-5 shadow color">
    <nav class="navbar navbar-light X d-flex">
      <h1>Inventario</h1>
      <form class="form-inline d-flex">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn mx-3"><i class="bi bi-search"></i></button>
   </form>
   
    </nav>

<table class="table table-bordered border-1 bg-white">
    <thead>
      <tr class="bnaranja" >
        <th scope="col">id</th>
        <th scope="col" class="" >Imagen</th>
        <th scope="col" class="" >Producto</th>
        <th scope="col">Precio por unidad</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cantidad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>

    </tbody>
  </table>

  <div class="col pt-5 mt-5 row">
           <h1 class=" display-5 text-center mano p-5">Productos</h1>
           <div class="card-columns">
               <?php foreach($resultado as $row){ ?>
         <div class="card">
      <img src="../../IMG/inventario/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title"><strong><?php echo $row['producto']; ?></strong></h5>
      <h5 class="card-title"><strong><?php echo $row['preuni']; ?></strong></h5>
      <h5 class="card-title"><strong><?php echo $row['cat']; ?></strong></h5>
      <h5 class="card-title"><strong><?php echo $row['cantidad']; ?></strong></h5>
    </div>
               
  </div>
  <?php }?>
       </div>
    </div>


<div class="row justify-content-center">

  <div class="col justify-content-center row p-3"> <button type="button" class="btn btn-success w-25"  type="button" data-bs-toggle="collapse" data-bs-target="#subir" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-arrow-bar-up"></i></button> </div>
  <div class="col justify-content-center row p-3"><button type="button" class="btn btn-danger w-25"><i class="bi bi-trash"></i></button></div>
  <div class="col justify-content-center row p-3"><button type="button" class="btn btn-warning w-25"><i class="bi bi-pen"></i></button></div>

  <div class="collapse" id="subir">
  <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../../controller/invsubir.php" method="post" enctype="multipart/form-data">
          <div class="form-group my-5">
              <label for="my-input" class="fs-2  pb-5">Selecciona una Imagen</label>
              <input id="my-input" type="file" name="imagen" class="">
          </div>
          <div class="form-group row">
            <div class="col-6">
              <label for="my-input" class="fs-2 py-1 ">Producto</label>
              <input id="my-input" class="form-control" type="text" name="producto">
            </div>
            <div class="col-6">
              <label for="my-input" class="fs-2 py-1  ">Precio. unidad</label>
              <input id="my-input" class="form-control" type="number" name="preuni">
            </div>
            <div class="col-6">
              <label for="my-input" class="fs-2 py-1 ">Categoria</label>
              <input id="my-input" class="form-control" type="text" name="cat">
            </div>
            <div class="col-6">
              <label for="my-input" class="fs-2 py-1 ">Cantidad</label>
              <input id="my-input" class="form-control" type="number" name="cant" placeholder="Cantidad">
            </div>

          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-danger my-5" name="Guardar">
         </form>
       </div>
       
  </div>
</div>
</div>

</div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

</body>
  </html>