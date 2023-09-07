
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmpleadoModificar | MIKIWEY'S APP</title>
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
<body class="bg-foto">
<div class=" justify-content-center  color container shadow p-5 my-5" id="subir" tabindex="-1" aria-hidden="true">
    <h1 class=" mb text-center">Modificar empleado</h1>
    <p class="text-center">Solo reemplace la información a actualizar</p>
    <hr>
        <div class="row text-center">

        <!-- PHP  -->

<?php 
require('../../controller/conexion.php');
$id=$_GET["id"];

$mostrarEmp = "SELECT * FROM empleados WHERE id_emp='$id'";
$result = $db->query($mostrarEmp);

if ($empleado= mysqli_fetch_array($result)){

}
?>
         <form action="../../controller/empleado_editar.php" method="POST">
          </div>
          <div class="form-group row">
            <div class="col-6">
              <label  class="fs-5 py-1 ">Id del empleado</label>
              <input class="form-control" type="text" readonly name="id" value="<?php echo $empleado['id_emp'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Nombres</label>
              <input class="form-control" type="text" name="nom" value="<?php echo $empleado['nom'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1" >Apellidos</label>
              <input  class="form-control" type="text" name="apel" value="<?php echo $empleado['apel'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Fecha de ingreso</label>
              <input  class="form-control" type="date" name="fecing" value="<?php echo $empleado['fecing'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Contrato</label>
              <input  class="form-control" type="text" name="cont" value="<?php echo $empleado['cont'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Teléfono</label>
              <input  class="form-control" type="text" name="tel" value="<?php echo $empleado['tel'] ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Salario</label>
              <input  class="form-control" type="number" name="sal" value="<?php echo $empleado['sal'] ?>">
            </div>
            <div class="modal-footer align-items-center justify-content-around">
        <a type="button" href="empleados.php" class="btn btn-secondary">Cancelar</a>
        <input type="submit" value="Guardar" class="btn btn-danger my-5" name="modificar">
      </div>
          </div>
        </div>
      
       </div>
      
      </form>
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
    <script src="../../js/script.js"></script>
</body>
  </html>