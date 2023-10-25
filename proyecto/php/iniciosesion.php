<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="sahortcut icon" href="../img/escudo.png">
    <link rel="icon" sizes="192x192" href="../img/escudo.png">
    <link rel="favicon" href="../img/escudo.png">
    <link rel="apple-touch-icon" href="../img/escudo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>


    <nav class="navbar navbar-expand-lg bgm ">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">EntreNubesSurOriental</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="registro.php">Registro</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Otros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ayuda.php">Ayuda
                  </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<div class="container-fluid bgm">
    <div class="container bga">
        <h1 class="text-center comida">COLEGIO EN LÍNEA</h1>
    </div>
</div>
<div class="container bgm">
    <h1 class="text-center">Inicio de sesión</h1>
</div>
<div class="col-12">
<div class="container"></div>
</div>
</div>
</div>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                        
    <div class="col-md-16">
      <form action="iniciarsesion.php" method="POST">
              <label for="nom" class="form-label">Número de identidad</label>
              <input type="text" class="form-control" name="usuario" value="" required>
              <div class="valid-feedback">
                ¡Se ve bien!
              </div>
            </div>
            <div class="col-md-16">
              <label for="nom" class="form-label">Contraseña</label>
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="contraseña" >
             
              <br>
                  <input type="submit" value="Ingresar" name="iniciar"></input>
                  <br>
                  <br>
                        <a href="sesion.html" class="m">¿No tienes cuenta? Regístrate</a>
                        </form>

              </div>
            </div>

 
                




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>