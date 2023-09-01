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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau:ital,wght@1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="css/styles.css">
    <title>MIKIWEY'S APP AD | Inventario </title>
    <!--  -->
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="stylesheet" href="../../CSS/font-awesome.min.css">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
    <link rel="stylesheet" href="../../CSS/contacto.css">
</head>
<body>

<!--  -->
<div class="container shadow p-5 color">
  <nav class="d-flex py-5">
    <h1>Empleados</h1>
    <button class="btn btn-warning mx-2">Nuevo</button>
    <form action="" class="d-flex">
      <input type="search" placeholder="Buscar" class="form-control">
      <button class="btn"><i class="bi bi-search"></i></button>
    </form>
    <select class="form-select" name="" id=""> 
      <option value="1">A-Z</option>
      <option value="2">Z-A</option>
      <option value="3">Menor Salario</option>
      <option value="4">Mayor Salario</option>
    </select>
  </nav>
  
<table class="table bg-white table-bordered">
    <thead>
      <tr class="bnaranja">
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Contrato</th>
        <th scope="col">Telefono</th>
        <th scope="col">Salario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>Carolina</td>
        <td>Castillo</td>
        <td>17/07/22</td>
        <td>Fijo</td>
        <td>3142171737</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Brayan</td>
        <td>Carmona</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3112150484</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Dayana</td>
        <td>Martinez</td>
        <td>18/06/2022</td>
        <td>Indefinido</td>
        <td>3182263284</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Diana</td>
        <td>Rojas</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3106699846</td>
        <td>2.000.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Jose</td>
        <td>Carmona</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3214778351</td>
        <td>2.000.000</td>
      </tr>
    </tbody>
  </table>
</div>
<!--  -->
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