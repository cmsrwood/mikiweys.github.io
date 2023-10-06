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
 <br>
  <div class="container d-flex row mt-5  ">
    
  <div class="row mt-5">
  <div class="col-5 color ">

  <img src="../../IMG/index/pan.jpg" class=" mt-4 rounded-circle img-fluid" alt="">
            <p class="fs-1 simoneta">Principal</p>
            
    <div id="list-example" class="list-group">
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-1"><i class="bi bi-person-circle"></i> Infomación de usuario</a>

      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-2">  <i class="bi bi-bag"></i>Pedidos</a>
      <h2 class="simoneta">Detalles</h2>
      
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-3"><i class="bi bi-credit-card-2-front "></i> Metodos de pago</a>
      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-4"><i class="bi bi-cart"></i>Carrito</a>

      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-5"><i class="bi bi-geo-alt"> </i> Editar direcciones</a>

      <a class="list-group-item-warning list-group-item-action btn btn-warning  d-grid gap-3 poppins d-flex align-content-between my-3" href="#list-item-5"><i class="bi bi-file-earmark-text"> </i> Editar cuenta</a>

    </div>
  </div>
  <div class="col-7 ">
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

      <div id="list-item-1"> <div class="fs-5 my-4">Nombres</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Apellidos</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Correo electrónico</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Teléfono</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Direcciones</div>
                  <input type="text" class="form-control" readonly>
         </div>

      
      <div id="list-item-2" class="mt-5">
      <table class="table">
  <thead>
    <tr class="bnaranja">
      <th scope="col">#</th>
      <th scope="col"></th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
      <p>...</p>
      <h4 id="list-item-3">Item 3</h4>
      <p>...</p>
      <h4 id="list-item-4">Item 4</h4>
      <p>...</p>
      <div id="list-item-5"></div>
      <div id="list-item-6"></div>
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