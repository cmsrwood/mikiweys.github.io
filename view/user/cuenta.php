<?php include('../../controller/verificacion_user.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | MIKIWEY'S APP</title>
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
  <?php include('../include/logo.php'); ?>

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">

</head>
<body>
  <?php include('../include/header.php'); ?>
 
  <div class="container-fluid justify-content-center row  " >
    
  <div class="row mt-5">

  <div class="col-3 color">

  <img src="../../IMG/index/pan.jpg " class=" mt-4 rounded-circle img-fluid" alt="">

  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#foto">
    <i class="bi bi-camera"></i>
</button>

<div class="modal fade" id="foto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="foto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="foto">Cambia tu foto de perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="imagen">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Cambiar foto</button>
      </div>
    </div>
  </div>
</div>
            <p class="fs-1 simoneta">Principal</p>
            
    <div id="list-example" class="list-group">
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-1"><i class="bi bi-person-circle"></i> Infomación de usuario</a>

      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-2">  <i class="bi bi-bag"></i>Pedidos</a>
      <h2 class="simoneta">Detalles</h2>
      
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-3"><i class="bi bi-credit-card-2-front "></i> Metodos de pago</a>
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-4"><i class="bi bi-cart"></i>Carrito</a>

      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-6"><i class="bi bi-file-earmark-text"> </i> Editar cuenta</a>

    </div>
  </div>
  <div class="col-9 justify-content-center row">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0" class="d-flex justify-content-center">

       
      <div id="list-item-1"> 
                  <p class="fs-1 poppins text-warning border-bottom border-warning ">Información personal</p>
      
                  <div class="fs-5 my-4">Nombres</div>
                  <input type="text" class="form-control" readonly value="<?php echo ($_SESSION['nom']) ?>">

                  
                  <div class="fs-5 my-4">Apellidos</div>
                  <input type="text" class="form-control" readonly value="<?php echo($_SESSION['apel']); ?>">

                  <div class="fs-5 my-4">Correo electrónico</div>
                  <input type="text" class="form-control" readonly value="<?php echo($_SESSION['mail']); ?>">

                  <div class="fs-5 my-4">Teléfono</div>
                  <input type="text" class="form-control" readonly value="<?php echo($_SESSION['tel']); ?>">

                  <div class="fs-5 my-4">Direcciones</div>
                  <input type="text" class="form-control" readonly value="<?php echo($_SESSION['dir']); ?>">
                  <a href="#list-item-5"  type="button" class="btn btn-warning mt-5 poppins"> Editar cuenta</a>
         </div>

      
      <div id="list-item-2" class="mt-5">
        <!-- 
      <p class="fs-1 poppins text-warning border-bottom border-warning ">Pedidos</p>
      
      <table class="table table-bordered border-1">
  <thead>
    <tr class="bnaranja">
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Productos</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio por unidad</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>1200</td>
      <td>121</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>dsads</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>larry</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>adjkasd</td>
    </tr>
  </tbody>
</table>
 -->
      </div>
      <a href="#informacioncuenta" class="fixed-bottom btn btn-warning rounded w-25"><i class="bi bi-arrow-up"></i></a>
      
      <div id="list-item-3">
      <p class="fs-1 poppins text-warning border-bottom border-warning ">Metodos de pago</p>
      <div class="row">
        <div class="card col-2 ">
          <img src="../../IMG/cuenta/descarga.png" class="img-fluid" alt="">
        </div>

        <div class="card col-2  mx-3">
          <img src="../../IMG/cuenta/Nequi.jpg" class="img-fluid" alt="">
        </div>

        <div class="card col-2 ">
          <img src="../../IMG/cuenta/BColombia.png" class="img-fluid" alt="">
        </div>

        <div class="card col-2 ms-3 ">
          <img src="../../IMG/cuenta/Paypal.png " class="img-fluid" alt="">
        </div>

        </div>
      </div>

      <div id="list-item-5" class=" mt-4"></div>
      <div id="list-item-6">
      <p class="fs-1 poppins text-warning border-bottom border-warning ">Editar cuenta</p>
      <form action="../../controller/cuenta_editar.php" method="POST">
      <div class="fs-5 my-4">Nombres</div>
      <input type="text" class="form-control" value="<?php echo ($_SESSION['nom']) ?>" name="nomb">

      <div class="fs-5 my-4">Apellidos</div>
      <input type="text" class="form-control"value="<?php echo ($_SESSION['apel']) ?>" name="apel">

      <div class="fs-5 my-4">Correo electrónico</div>
      <input type="text" class="form-control" value="<?php echo ($_SESSION['mail']) ?>" name="corr">

      <div class="fs-5 my-4">Teléfono</div>
      <input type="text" class="form-control" value="<?php echo ($_SESSION['tel']) ?>" name="tele">

      <div class="fs-5 my-4">Direcciones</div>
      <input type="text" class="form-control" value="<?php echo ($_SESSION['dir']) ?>" name="dire">

      <button type="submit" class="btn btn-warning mt-5" name="modificar">Guardar</button>
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
    <!-- MY JS -->
    <script src="../../js/index.js"></script>
    
  
</body>
</html>