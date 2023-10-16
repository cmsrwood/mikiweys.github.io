<?php 
  require('../../controller/verificacion_admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario | MIKIWEY'S APP</title>
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
    <h1 class=" mb text-center">Modificar producto</h1>
    <p class="text-center">Solo reemplace la información a actualizar</p>
    <hr>
        <div class="row text-center">

        <!-- PHP  -->

<?php 
require('../../controller/conexion.php');
$id=$_GET["id"];

$mostrarArticulo = "SELECT * FROM inventario WHERE id_inv='$id'";
$result = $db->query($mostrarArticulo);

if ($producto= mysqli_fetch_array($result)){

}
?>
         <form action="../../controller/inv_editar.php" method="POST">
          <div class="form-group row">
            <div class="col-6">
              <label  class="fs-5 py-1 ">Id del producto</label>
              <input class="form-control" type="text" readonly name="id" value="<?php echo $producto['id_inv']; ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Nombre del producto</label>
              <input class="form-control" type="text" name="productom" value="<?php echo $producto['producto'];?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Descripción</label>
              <input class="form-control" type="text" name="descripm" value="<?php echo $producto['descrip']; ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1" >Precio. unidad</label>
              <input  class="form-control" type="number" step="50" name="preunim" value="<?php echo ($producto['preuni']);
               ?>">
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Categoria</label>
              <select class="form-select" name="catm" id="">
                <option value="0" selected disabled>Seleccione la categoria</option>
                <?php
                  $cat="SELECT * FROM categorias";
                  
                  $resul=mysqli_query($db,$cat);
                  while($valores = mysqli_fetch_array($resul)){
                    echo '<option value="' . $valores['categoria'] . '"';
                      if ($producto['cat'] == $valores['categoria']) {
                          echo ' selected';
                      }
                      echo '>' . $valores['categoria'] . '</option>';
                  }
                ?>
              </select>
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Cantidad</label>
              <input  class="form-control" type="number" name="cantm" value="<?php echo $producto['cantidad'] ?>">
            </div>
            <div class="modal-footer align-items-center justify-content-around">
        <a type="button" href="inventario.php" class="btn btn-secondary">Cancelar</a>
        <input type="submit" value="Guardar" class="btn btn-warning my-5" name="modificar">
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
    <script src="../../js/scripts.js"></script>
</body>
  </html>