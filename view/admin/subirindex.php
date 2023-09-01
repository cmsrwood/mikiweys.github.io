<?php 
  include('../../controller/conexion.php');
  $query = $PDO->prepare("SELECT * from imagenes");
  $query->execute();
  $resultado = $query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!--  -->

<!--  -->
  <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../../controller/subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group my-5">
              <label for="my-input" class="fs-2 fuente1 pb-5">Selecciona una Imagen</label>
              <input id="my-input" type="file" name="imagen" class="fuente1">
          </div>
          <div class="form-group">
              <label for="my-input" class="fs-2 py-1 fuente1">Título</label>
              <input id="my-input" class="form-control" type="text" name="titulo">
          </div>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="Guardar" class="btn btn-danger mb-5" name="Guardar">
         </form>
       </div>
       <div class="col pt-5 mt-5 row">
           <h1 class=" display-5 text-center mano p-5">Productos</h1>
           <div class="card-columns">
               <?php foreach($resultado as $row){ ?>
         <div class="card">
      <img src="../../IMG/productos/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
       <div class="card-body">
      <h5 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h5>
    </div>
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
</body>
</html>