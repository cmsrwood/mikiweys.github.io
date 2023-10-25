<!DOCTYPE html>
<html lang="es">
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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Otros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ayuda.html">Ayuda
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
        <h1 class="text-center"> Registro</h1>
    </div>
    <div class="col text-center bgn row p-4 m-4 ">
        <form class="row g-3 needs-validation" method="POST" action="registrar.php">
            <div class="col-md-6">
              <label for="nom" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nom" value="" required>
              <div class="valid-feedback">
                ¡Se ve bien!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apel" id="validationCustom02" value="" required name="apel">
              <div class="valid-feedback">
                ¡Se ve bien!
              </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">fecha de nacimiento</label>
                <input type="date" class="form-control" name="date" id="validationCustom02" value="" required name="date">
                <div class="valid-feedback">
                  ¡Se ve bien!
                </div>
              </div>

              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">tipo de documento</label>
                <select class="form-select" name="doctype" id="validationCustom04" required name="doctype">
                  <option selected disabled value="0">elige</option>
                  <option value="1">CC</option>
                  <option>TI</option>
                  <option>CE</option>
                  <option>NIT</option>
                  <option>NIP</option>
                </select>
                <div class="invalid-feedback">
                  Selecciona un tipo de documento válido.
                </div>
              </div>
              <div class="col-md-4">
              <label for="nom" class="form-label">Número de identidad</label>
              <input type="text" class="form-control" name="numdoc" value="" required>
              <div class="valid-feedback">
                ¡Se ve bien!
              </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Rol</label>
                <select class="form-select" name="roll" id="validationCustom04" required name="doctype">
                  <option selected disabled value="0">elige</option>
                  <option>Estudiante</option>
                  <option>Acudiente</option>
                  <option>Docente</option>
                  <option>Coordinador</option>
                </select>
                <div class="invalid-feedback">
                  Selecciona  válido.
                </div>
              </div>
              <div class="col-md-4">
              <label for="nom" class="form-label">Teléfono</label>
              <input type="text" class="form-control" name="tel" value="" required>
              <div class="valid-feedback">
                ¡Se ve bien!
              </div>
            </div>
            <div class="col-md-4
            
            }
            }">
                <label for="validationCustom02" class="form-label">correo electronico</label>
                <input type="text" class="form-control" name="email" id="validationCustom02" value="" required name="email">
                <div class="valid-feedback">
                  ingresar correo
                </div>
              </div>
            <div class="col-12">
                <div class="invalid-feedback">
                  Debe estar de acuerdo antes de enviar.
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-auto">
                  <label for="inputPassword6" class="col-form-label">Contraseña</label>
                </div>
                <div class="col-auto">
                  <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="pass">
                </div>
                <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
        
                  </span>
                </div>
              </div>
              
            <div class="col-12">
            <input class="btn btn-primary my-5" type="submit" name="registrar"></input>
            <?php include('registrar.php') ?>
          </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>