<?php
  include ('../../controller/conexion.php');
  include('../../model/inventario_select_all.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - MIKIWEY'S APP</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../IMG/todo/logo2.ico">
</head>
<body data-bs-theme="light"> 

<!-- HEADER -->
<header>
  <nav id="navbar" class="navbar navbar-expand-xl bg-white fixed-top text-center align-items-center shadow">
    <div class="container-fluid d-flex ">
       <!-- OFFCANVAS BTN -->
       <a class="d-flex d-xl-none btn btn-outline-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="bi-list"></i>
      </a>
      <!-- LOGO -->
          <a class="navbar-brand containerzoom giroi " href="../../index.php">
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
              <a class="nav-link  hovernaranja" href="nosotros.php">
                  <i class="bi bi-people"></i>
                  <span class="off ">Nosotros</span>
              </a>
          </li>
          <li class="  col-3 align-self-center text-center">
              <a class="nav-link  hovernaranja" href="contacto.php">
                  <i class="bi bi-telephone"></i>
                  <span class="off">Contacto</span> 
              </a>
          </li>
          <li class=" mx-2 col-3 align-self-center text-center">
            <a class="nav-link hovernaranja" href="productos.php">
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
                <li><a class="dropdown-item" href="login.php">Ingresa</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.php">Tu perfil</a></li>
                <li><a class="dropdown-item" href="carrito.php">Tu carrito</a></li>
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
    </div>
  </nav>
    
  </button>
  <!-- OFFCANVAS -->
  <div class="offcanvas offcanvas-start w-75 " tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header border border-bottom ">
      <a class="navbar-brand containerzoom giroi " href="index.php">
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
            <a class="nav-link" href="view/user/nosotros.php">
              <i class="bi bi-people"></i>
              <span class="">Nosotros</span>
          </a>
          </li>
          <li>
            <a class="nav-link " href="view/user/contacto.php">
              <i class="bi bi-telephone"></i>
              <span class="off">Contacto</span> 
          </a>
          </li>
          <li>
            <a class="nav-link" href="view/user/productos.php">
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
<!-- BUSCADOL -->

<div class="container justify-content-center mt-5 pt-5" id="main">
  <div class="row align-items-center pt-5">
    <div class="col-8">
      <input type="search" placeholder="Busca tu producto" class="form-control my-5">
    </div>
    <div class="col">
      <a href="#" class="btn bnaranja hovercafe text-white">Buscar</a>
    </div>
    <div class="col ">
      <div class="dropdown">
        <a class="text-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ordenar por
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item border-bottom" href="#">Mas relevante</a></li>
          <li><a class="dropdown-item border-bottom" href="#">Mayor precio</a></li>
          <li><a class="dropdown-item" href="#">Menor precio</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- PRODUCTOS -->
<div class="container p-5 shadow d-flex color" id="main">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <!--  -->
    <?php foreach($resultado as $producto){ ?>
      <div class="col mb-3">
      <div class="card m-auto">
        <img src="../../IMG/inventario/<?php echo $producto['imagen']; ?>" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title"><?php echo $producto['producto']; ?></h5>
          <p class="card-text"><?php echo $producto['preuni']; ?></p>
          <p class="card-text">Descripción del producto.</p>
          <a href="producto.php?id=<?=$producto['id_inv']?>" class="btn bordenaranja naranja bhovernaranja">Comprar</a>
        </div>
      </div>
    </div>
  <?php }?>
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
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- MY JS -->
    <script src="../../js/script.js"></script>
</body>
</html>
