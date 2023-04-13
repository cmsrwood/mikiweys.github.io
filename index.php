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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/imagehover.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/whats.css">
    <link rel="stylesheet" href="/css/whats2.css">
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <!-- LOGO ICON -->
    <link rel="shortcut icon" href="/IMG/todo/logo2.ico">
    <link rel="icon" sizes="192x192" href="/IMG/todo/logo2.ico">
    <link rel="favicon" href="/IMG/todo/logo2.ico">
    <link rel="apple-touch-icon" href="/IMG/todo/logo2.ico">
    <!-- META  -->
    <meta name="description" content="Panaderia Mikiweys">
</head>
    
<body> 
<!-- Father -->
<div class="padre">  
<!-- HEADER -->
<header>
<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-white text-center align-items-center shadow">
  <div class="container-fluid">
        <a class="navbar-brand me-5 pe-5" href="index.html">
          <img src="IMG/todo/logo.png" alt="" class="img-fluid " width="100">
        </a>
    <form class="d-flex">
        <input class="form-control me-2 " type="search" placeholder="Busca tu producto" id="search"/>
        <button class="btn bordenaranja naranja bhovernaranja" type="submit">BUSCAR</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav px-5 mx-5 ">
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="html/nosotros.html">
                <i class="bi bi-people"></i>
                <span class="off ">Nosotros</span>
            </a>
        </li>
        <li class="  col-3 align-self-center text-center">
            <a class="nav-link  hovernaranja" href="html/contacto.html">
                <i class="bi bi-telephone"></i>
                <span class="off">Contacto</span> 
            </a>
        </li>
        <li class=" mx-2 col-3 align-self-center text-center">
          <a class="nav-link hovernaranja" href="html/productos.html">
            <i class="bi bi-shop"></i>
              <span class="off">Productos</span> 
          </a>
      </li>

        <li class=" dropdown  col-3 align-self-center text-center">
            <a class="nav-link dropdown-toggle hovernaranja" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle  naranja"></i>
              <span class="off">Mi cuenta</span>  
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/html/registro.html">Ingresa</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/html/registro.html">Tu perfil</a></li>
              <li><a class="dropdown-item" href="/html/registro.html">Tu carrito</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Cerrar sesion </a></li>
            </ul> 
          </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!-- CAROUSEL -->
                <div id="carouselExampleCaptions" class="carousel slide w-100 mt-5 pt-5" data-bs-ride="carousel">
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
<!-- PRESENTACION -->
<main>
        <div class="p-5 d-flex container color shadow">      
            <div class="row align-items-start">
                <div class="text-orange">
                    <h1 class="display-5 naranja abril mt-4 animate__animated animate__fadeInLeft wow">PANADERÍA <br> MIKIWEYS</h1>
                </div>
                <div class="simoneta animate__animated animate__fadeInLeft wow">
                    <h3>La frescura es nuestra <br> especialidad</h3>
                </div>
                <div class="">
                    <button type="button" class="btn bnaranja p-4 rounded hovercafe text-white">Comprar ahora > </button>  
                </div>
            </div>  
                <div class="">
                    <img class="img-fluid animate__animated animate__zoomIn wow zoomhover containerzoom p-5 d-none d-xl-block" src="IMG/index/panpresentacion.png"> 
                </div>
        </div> 
<!-- COSAS -->
<div class="container-fluid color shadow p-5 my-5">
  <h1 class="display-5 naranja abril mt-4 animate__animated animate__fadeInLeft wow">PANADERÍA <br> MIKIWEYS</h1>
</div>
</main>
<div class="containerpassword">
  <input type="password" class="passw" id="Input"> 
  <img src="img/Show.png" alt="" class="icon" id="Eye">
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
<!-- WHATSAPP -->
<div class="nav-bottom animate__animated animate__bounce animate__delay-5s">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
   <div class="popup-whatsapp ">
       <div class="content-whatsapp -top"><button type="button" class="closePopup">
             <i class="material-icons icon-font-color">close</i>
           </button> 
         
          <p>  <img src="/img/secretary.png" width="50">  Hola ¿En que podemos ayudarte? </p>
          
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
<!-- SCRIPTS -->
<script src="js/script.js"></script>
<script src="js/wow.min.js"></script>
          <script>
          new WOW().init();
          </script>
<script  src="js/script2.js"></script>
</html>



<!-- http://127.0.0.1:5500/index.html -->