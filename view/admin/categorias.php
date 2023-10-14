<?php 
  require('../../controller/verificacion_admin.php');
  include('../../model/categorias_select_all.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empleados | MIKIWEY'S APP</title>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

  <!-- LIBRERÍAS CSS -->  
  <?php include ('../../view/include/boostrap.php');?>


  <!-- LOGO ICON -->
  <?php include ('../../view/include/logo.php');?>


  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="bg-foto">
<?php include('../include/header_admin.php'); ?>
  <div class="container my-5 p-5 shadow color">
    <nav class="navbar navbar-light d-flex">
      <h1>Empleados</h1>
      <form class="form-inline d-flex">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn mx-3"><i class="bi bi-search"></i></button>
   </form>
    </nav>


    <?php foreach($categorias as $categoria){ ?>

  <?php }?>


<!-- DELETE FROM `inventario` WHERE `inventario`.`id_emp` = 1 -->

<div class="row justify-content-center">

  <div class="col row p-3"> <button type="button" class="btn btn-success w-25" data-bs-toggle="modal" data-bs-target="#subir"><i class="bi bi-arrow-bar-up pe-2"></i>Nuevo</button> </div>
  <?php if(isset($_SESSION['alerta'])){ ?>
    <div class="row justify-content-end fixed-bottom">
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show  w-25 " role="alert">
         <strong><?php echo $_SESSION['alerta']; ?></strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </button>
       </div>
          <?php session_unset(); } ?>
          </div>
<!-- Modal -->
<div class="modal fade" id="subir" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Subir producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../../controller/empleado_subir.php" method="POST">
            <div class="form-group">
              <label  class="fs-5 pb-2">Selecciona una Imagen</label>
              <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="imagen">
              </div>
          </div>
              <label  class="fs-5 py-1 ">Nombre de categoria</label>
              <input  class="form-control" type="text" name="categoria">
            </div>
          </div>
       </div>
       
  </div>
</div>
      </div>
      <div class="modal-footer align-items-center justify-content-around">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" value="Guardar" class="btn btn-danger my-5" name="agregar">
      </div>
      </form>
    </div>
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
    <script src="../../js/script.js"></script>

</body>
  </html>