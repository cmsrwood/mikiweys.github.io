<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
</head>
<body>
<!-- Father -->
<div class="padre"> 
<!-- HEADER -->
<?php include('../include/header.php'); ?>
<!-- IMAGEN -->

<!-- CONTAINER -->
<div class="container-fluid d-flex">
    <!-- imputs -->
    <div class="row p-5"> 
        <div class="col-12">
            <p class="pt-5 ps-5">Nombre</p>
            <input type="text" name="" id="" class="mx-5 form-control">
        </div>
        <div class="col-12">
            <p class="ps-5 mt-4">Email</p>
            <input type="text" name="" id="" class="mx-5 form-control">
        </div>
        <div class="col-12">
            <p class="ps-5 mt-5">Mensaje</p>
            <div class="form-floating">
              <textarea class="form-control form-text mx-5 textarea"></textarea>
            </div>
        </div>
        <div class="col-12">
          <input type="submit" name="signup_submit" value="Enviar" class="mx-5 px-5 btn mt-5 bnaranja hovercafe text-light"/>
        </div>
    </div>
<!-- texto -->
    <div class="row p-5 mt-5">
        <div class="col-12 mx-5">
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="#!" role="button">
                <i class="bi bi-facebook"></i>
            </a>
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="" role="button">
                <i class="bi bi-instagram"></i>
            </a>
            <a class="btn btn-outline-dark btn-floating mx-2 rounded-circle" href="" role="button">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
        <div class="col-12 mx-5 mt-5">
            <p class="fs-2 simoneta text-dark">Mikiwey</p>
            <p>KR 3 este 46 B 05 sur</p>
            <p>Villa del cerro, Canadá Güira, Bogotá</p>
        </div>
        <div class="col-12 mx-5 mt-5">
            <p class="fs-3 simoneta text-dark">Correo electronico</p>
            <a href="" class="naranja">correopanaderia@gmail.com</a>
            
        </div>
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
</div>
</body>
</html>
