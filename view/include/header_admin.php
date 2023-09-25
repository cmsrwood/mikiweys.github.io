<header>
<nav id="navbar" class="navbar navbar-expand-xl bg-white text-center align-items-center shadow">
  <div class="container-fluid d-flex ">
     
    <!-- LOGO -->
        <a class="navbar-brand containerzoom giroi " href="../../index.php">
          <img id="logo" src="../../IMG/todo/logo.png" alt="" class="img-fluid " width="100">
        </a>
     <!-- OFFCANVAS BTN -->

        <a class="d-flex d-xl-none btn btn-outline-warning" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <i class="bi-list"></i>
    </a>
   <!-- SEARCH CEL -->
    <div class="collapse navbar-collapse container text-center justify-content-end lg-justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav px-5 mx-5 ">
        <li class="  col align-self-center text-center">
            <a class="nav-link  hovernaranja" href="empleados.php">
                <i class="bi bi-people"></i>
                <span class="off ">Empleados</span>
            </a>
        </li>
        <li class=" mx-2 col align-self-center text-center">
          <a class="nav-link hovernaranja" href="inventario.php">
            <i class="bi bi-shop"></i>
              <span class="off">Inventario</span> 
          </a>
      </li>
            <a class="nav-link hovernaranja">
                <i class="bi bi-person-circle  naranja"></i>
              <span class="off"><?php echo($_SESSION['nom']); ?></span>  
            </a>
              <li>
                <form action="../../controller/logout.php" method="POST">
                  <input type="submit" value="Cerrar sesión" class=" btn btn-danger" name="logout">
              </form></li>
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
      <img id="logor"  src="IMG/todo/logo.png" alt="" class="img-fluid " width="65">
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
          <a class="nav-link" href="view/nosotros.php">
            <i class="bi bi-people"></i>
            <span class="">Nosotros</span>
        </a>
        </li>
        <li>
          <a class="nav-link " href="view/contacto.php">
            <i class="bi bi-telephone"></i>
            <span class="off">Contacto</span> 
        </a>
        </li>
        <li>
          <a class="nav-link" href="view/productos.php">
            <i class="bi bi-shop"></i>
              <span class="off">Productos</span> 
          </a>
        </li> 
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="IMG/todo/client.png" alt="" width="32" height="32" class="rounded-circle me-2">
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