<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include ('controller/conexion.php')
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKIWEY'S APP</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

    <!-- LIBRERIAS CSS -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/imagehover.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/whats.css">
    <link rel="stylesheet" href="css/whats2.css">

    <!-- LOGO ICON -->
    <link rel="shortcut icon" href="IMG/todo/logo2.ico">
    <link rel="icon" sizes="192x192" href="IMG/todo/logo2.ico">
    <link rel="favicon" href="IMG/todo/logo2.ico">
    <link rel="apple-touch-icon" href="IMG/todo/logo2.ico">

    <!-- META  -->
    <meta name="description" content="Panadería Mikiweys">


    
</head>
    
<body> 
<!-- Father -->
<div class="padre">  
<!-- HEADER -->
  <?php
    include ('controller/view/header.php')
  ?>
<!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide w-100 mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="IMG/index/1 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="" width="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">First slide label</h5>
                          <p>Some representative placeholder for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/index/2 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/index/3 carrusel.jpg" class="d-block w-100 img-fluid" alt="..." height="">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 class="simoneta display-5">Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
<!-- PRESENTACIÓN -->
<main>
        <div class="p-5 d-flex container color shadow">   
            <div class="row align-items-start">
              <h2 class="naranja simoneta display-4 border-bottom border-warning border-3 mb-3 text-center">Promociones </h2>   
              <!--  -->
              <div class="col-10 col-sm-5 col-lg-2 m-auto my-3 shadow bg-light zoomhover containerzoom row" >
                  <img class="img-fluid animate__animated animate__zoomIn wow  my-2" src="IMG/index/pan.jpg"> 
                <div class="w-50">
                  <p class="my-3 simoneta">PAN</p>
                  <p class="my-3 fw-semibold">Unidad: $400</p>
                </div>
                <div class="col my-5">
                  <a href="" class="btn bnaranja hovercafe bhovernaranja"><i class="bi bi-cart"></i></a>
                </div>
              </div>
              <!--  -->
              <div class="col-10 col-sm-5 col-lg-2 m-auto my-3 shadow bg-light zoomhover containerzoom row" >
                <img class="img-fluid animate__animated animate__zoomIn wow  my-2" src="IMG/index/pan.jpg"> 
              <div class="w-50">
                <p class="my-3 simoneta">PAN</p>
                <p class="my-3 fw-semibold">Unidad: $400</p>
              </div>
              <div class="col my-5">
                <a href="" class="btn bnaranja hovercafe bhovernaranja"><i class="bi bi-cart"></i></a>
              </div>
            </div>
              <!--  -->
              <div class="col-10 col-sm-5 col-lg-2 m-auto my-3 shadow bg-light zoomhover containerzoom row" >
                <img class="img-fluid animate__animated animate__zoomIn wow  my-2" src="IMG/index/pan.jpg"> 
              <div class="w-50">
                <p class="my-3 simoneta">PAN</p>
                <p class="my-3 fw-semibold">Unidad: $400</p>
              </div>
              <div class="col my-5">
                <a href="" class="btn bnaranja hovercafe bhovernaranja"><i class="bi bi-cart"></i></a>
              </div>
            </div>
            <!--  -->
            <div class="col-10 col-sm-5 col-lg-2 m-auto my-3 shadow bg-light zoomhover containerzoom row" >
              <img class="img-fluid animate__animated animate__zoomIn wow  my-2" src="IMG/index/pan.jpg"> 
            <div class="w-50">
              <p class="my-3 simoneta">PAN</p>
              <p class="my-3 fw-semibold">Unidad: $400</p>
            </div>
            <div class="col my-5">
              <a href="" class="btn bnaranja hovercafe bhovernaranja"><i class="bi bi-cart"></i></a>
            </div>
          </div>
            </div>  
        </div> 



<!-- COSAS -->
</main>
<!-- FOOTER -->

<?php
    include ('controller/view/footer.php')
  ?>
</div>
<!-- WhatsApp -->
<div class="nav-bottom animate__animated animate__bounce animate__delay-5s">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
   <div class="popup-whatsapp ">
       <div class="content-whatsapp -top"><button type="button" class="closePopup">
             <i class="material-icons icon-font-color">close</i>
           </button> 
         
          <p>  <img src="IMG/secretary.png" width="50">  Hola ¿En que podemos ayudarte? </p>
          
       </div>
       <div class="content-whatsapp -bottom ">
         <input class="whats-input text-dark" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
           <button class="send-msPopup" id="send-btn" type="button">
               <i class="material-icons icon-font-color--black">send</i>
           </button>

       </div>
   </div>
   <button type="button" id="whats-openPopup" class="whatsapp-button animate__animated animate__fadeIn">
       <div class="float" >
        <i class="bi bi-whatsapp"></i></div>
   </button>
   <div class="circle-anime"></div>
</div>
</body>
</html>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
          <script>
          new WOW().init();
          </script>
    <script  src="js/script2.js"></script>
    <script src="js/script.js"></script>


<!-- http://127.0.0.1:5500/index.html -->
