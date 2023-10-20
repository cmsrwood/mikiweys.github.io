
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
                <li><a class="dropdown-item" href="../login.php">Ingresa</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="cuenta.php">Tu perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
<?php  if (isset($_SESSION['rol'])){ ?>
   
            <?php    } else { ?>
              <form action="../../controller/logout.php" method="POST">
                <input type="submit" value="Cerrar sesión" class=" btn btn-danger w-100" name="logout">
            </form></li> 
              <?php    } ?>
              </ul> 
            </li>

            </div>
        </ul>
      </div>
    </div>
  </nav>
    
  </button>
  <!-- OFFCANVAS -->
  <div class="offcanvas offcanvas-start w-75 " tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header border border-bottom ">
      <a class="navbar-brand containerzoom giroi " href="../../index.php">
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
            <a class="nav-link" href="../user/nosotros.php">
              <i class="bi bi-people"></i>
              <span class="">Nosotros</span>
          </a>
          </li>
          <li>
            <a class="nav-link " href="../user/contacto.php">
              <i class="bi bi-telephone"></i>
              <span class="off">Contacto</span> 
          </a>
          </li>
          <li>
            <a class="nav-link" href="../user/productos.php">
              <i class="bi bi-shop"></i>
                <span class="off">Productos</span> 
            </a>
          </li> 
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?php echo ($_SESSION['nom']);; ?></strong>
          </a>
          <button id="btnrtema" onclick="tema()" class="btn" ><i id="irtema" class="bi bi-sun"></i></button>
          <ul class="dropdown-menu dropdown-menu-white text-small shadow">
            <li><a class="dropdown-item" href="#">Configuración</a></li>
            <li><a class="dropdown-item" href="../user/cuenta.php">Mi cuenta</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
               <form action="../../controller/logout.php" method="POST">
                <input type="submit" value="Cerrar sesión" class=" btn btn-danger" name="logout">
            </form></li>
          </ul>
        </div>
      </div>
  </div>
  </header>
  <br><br>