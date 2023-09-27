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
    <div class="container-fluid row mt-5">
        <div class="col-3 color ">
                
              
            <img src="../../IMG/index/pan.jpg" class=" mt-4 rounded-circle img-fluid" alt="">
            <p class="fs-1 simoneta">Principal</p>
          
            <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between" data-bs-toggle="collapse" href="#User" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-person-circle "></i> Información de usuario 
            </a>

            
            <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between my-3" data-bs-toggle="collapse" href="#Pedidos" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-bag "></i> Pedidos
            </a>

            <p class="fs-1 simoneta">Detalles</p>
          
            <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between my-3" data-bs-toggle="collapse" href="#Metodos_pago" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-credit-card-2-front "></i> Metodos de pago
            </a>

             <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between my-3" data-bs-toggle="collapse" href="#Carrito" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-cart"></i> Carrito
             </a>
            
             <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between my-3" data-bs-toggle="collapse" href="#Direccion" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-geo-alt"></i> Editar direcciones
             </a>
             
             <a class="btn btn-warning d-grid gap-3 poppins d-flex align-content-between my-3" data-bs-toggle="collapse" href="#Cuenta" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-file-earmark-text"></i> Editar cuenta
             </a>
        </div>





            <div class="col-9 ">
                <div class="collapse" id="User">
                <div class="card card-body">
                  <div class="fs-1 simoneta simoneta">¡Hola Dilan!</div>

                  <div class="fs-5 my-4">Nombres</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Apellidos</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Correo electrónico</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Teléfono</div>
                  <input type="text" class="form-control" readonly>

                  <div class="fs-5 my-4">Direcciones</div>
                  <input type="text" class="form-control" readonly>

                  <a href="#Cuenta">Editar cuenta</a>
                </div>
            </div>
    

               

                
              

               <div class="collapse" id="Pedidos">
                 <div class="card card-body">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                 </div>
               </div>

               <div class="collapse" id="Metodos_pago">
                <div class="card card-body">
                 Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
              
              <div class="collapse" id="Carrito">
                <div class="card card-body">
                 Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>

              <div class="collapse" id="Direccion">
                <div class="card card-body">
                 Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
              <div class="collapse" id="Cuenta">
                <div class="card card-body">
                 Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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