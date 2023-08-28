<!DOCTYPE html>
<html lang="en">
    <head>
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
        
<body data-bs-theme="light"> 
    <!-- Father -->
    <div class="padre">  
    <!-- HEADER -->
    <header>
    <nav id="navbar" class="navbar navbar-expand-xl bg-white fixed-top text-center align-items-center shadow">
      <div class="container-fluid d-flex ">
         <!-- OFFCANVAS BTN -->
         <a class="d-flex d-xl-none btn btn-outline-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <i class="bi-list"></i>
        </a>
        <!-- LOGO -->
            <a class="navbar-brand containerzoom giroi " href="index.html">
              <img id="logo" src="../../IMG/todo/logo.png" alt="" class="img-fluid " width="100">
            </a>
        <!-- BUSCAR -->
        <form class="d-none d-xl-flex">
            <input class="form-control me-2" type="search" placeholder="Busca tu producto" id="search"/>
            <button class="btn bordenaranja naranja bhovernaranja" type="submit">BUSCAR</button>
        </form>
        <!-- BOTÓN SEARCH -->
        <div class="collapse collapse-horizontal" id="collapseWidth">
          <div class="d-flex">
            <input class="form-control me-2 " type="search" placeholder="Busca tu producto" id="search"/>
            <button class="btn bordenaranja naranja bhovernaranja" type="submit"><i class="bi bi-search"></i>
            </button>
          </div>
        </div>
          <button class="btn btn-outline-warning d-flex d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth" aria-expanded="false" aria-controls="collapseWidth">
            <i class="bi bi-search"></i>
          </button>
          
       <!-- SEARCH CEL -->
        <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav px-5 mx-5 ">
            <li class="  col-3 align-self-center text-center">
                <a class="nav-link  hovernaranja" href="nosotros.html">
                    <i class="bi bi-people"></i>
                    <span class="off ">Nosotros</span>
                </a>
            </li>
            <li class="  col-3 align-self-center text-center">
                <a class="nav-link  hovernaranja" href="contacto.html">
                    <i class="bi bi-telephone"></i>
                    <span class="off">Contacto</span> 
                </a>
            </li>
            <li class=" mx-2 col-3 align-self-center text-center">
              <a class="nav-link hovernaranja" href="productos.html">
                <i class="bi bi-shop"></i>
                  <span class="off">Productos</span> 
              </a>
          </li>
    
            <li class=" dropdown  col-3 align-self-center text-center ">
                <a class="nav-link dropdown-toggle hovernaranja" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle  naranja"></i>
                  <span class="off">Mi cuenta</span>  
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.html">Ingresa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login.html">Tu perfil</a></li>
                  <li><a class="dropdown-item" href="carrito.html">Tu carrito</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Cerrar sesión </a></li>
                </ul> 
              </li>
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <small id="itoggle" class="bi bi-sun "> Tema</small>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-end">
                  <li>
                    <button id="btnlight" onclick="light()" class="btn">
                      <i id="ilight" class="bi bi-sun"> Claro</i>
                    </button>
                  </li>
                  <li>
                    <button id="btndark" onclick="dark()" class="btn">
                      <i id="idark" class="bi bi-moon "> Oscuro</i>
                    </button>
                  </li>
                </ul>
              </div>
              </div>
          </ul>
        </div>
    </nav>
      
    </button>
    <!-- OFFCANVAS -->
    <div class="offcanvas offcanvas-start w-75 " tabindex="-1" id="offcanvasExample">
      <div class="offcanvas-header border border-bottom ">
        <a class="navbar-brand containerzoom giroi " href="index.html">
          <img id="logor"  src="../../IMG/todo/logo.png" alt="" class="img-fluid " width="65">
        </a>
        <h5 class="offcanvas-title">
          Menú
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column">
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="" class="nav-link active bg-warning" aria-current="page">
                Inicio
              </a>
            </li>
            <li>
              <a class="nav-link" href="nosotros.html">
                <i class="bi bi-people"></i>
                <span class="">Nosotros</span>
            </a>
            </li>
            <li>
              <a class="nav-link " href="contacto.html">
                <i class="bi bi-telephone"></i>
                <span class="off">Contacto</span> 
            </a>
            </li>
            <li>
              <a class="nav-link" href="productos.html">
                <i class="bi bi-shop"></i>
                  <span class="off">Productos</span> 
              </a>
            </li> 
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../../IMG/todo/client.png" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Cliente</strong>
            </a>
            <button id="btnrtema" onclick="tema()" class="btn" ><i id="irtema" class="bi bi-sun"></i></button>
            <ul class="dropdown-menu dropdown-menu-white text-small shadow">
              <li><a class="dropdown-item" href="#">Configuración</a></li>
              <li><a class="dropdown-item" href="#">Mi cuenta</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
            </ul>
          </div>
        </div>
    </div>
    </header>
<div class="container-fluid color shadow mt-5 p-5">
    <div class="row">
        <div class="col-6 p-5 row">
            <div class="col-12" >
                <img src="../../IMG/index/pan.jpg" alt="" class="img-fluid" id="img">
            </div>
            <div class="col-12 row justify-content-around">
                <button class="btn my-3 col 1" onclick="cambiar()" id="btnc">
                    <img src="../../IMG/index/2 carrusel.jpg" alt="" class="img-fluid rounded-2 1" id="imgb">
                </button>
                <button class="btn my-3 col 2" onclick="cambiar()"  id="btnc">
                    <img src="../../IMG/index/1 carrusel.jpg" alt="" class="img-fluid rounded-2 2" id="imgb">
                </button>
                <button class="btn my-3 col 3" onclick="cambiar()"  id="btnc">
                    <img src="../../IMG/index/2 carrusel.jpg" alt="" class="img-fluid rounded-2 3" id="imgb">
                </button>
                <button class="btn my-3 col 4" onclick="cambiar()"  id="btnc">
                    <img src="../../IMG/index/3 carrusel.jpg" alt="" class="img-fluid rounded-2 4" id="imgb">
                </button>
            </div>
        </div>
        <div class="col-6 p-5 align-self-start">
                <h1>Nombre del producto</h1>
            <div class="row">
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem ipsum dolor sit amet.</p>
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
    <script src="../../js/producto.js"></script>
</body>
</html>