<?php 
  include('../../controller/venta_subir.php');
  include('../../model/inventario_select_all.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar venta | MIKIWEY'S APP</title>
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
  <link rel="shortcut icon" href="../../IMG/todo/logo.png">
  <link rel="icon" sizes="192x192" href="../../IMG/todo/logo2.ico">
  <link rel="favicon" href="../../IMG/todo/logo2.ico">
  <link rel="apple-touch-icon" href="../../IMG/todo/logo2.ico">

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="">
<div class="container  shadow">
<form id="formulario">
    <div class="row justify-content-center">
        <h1 class=" simoneta text-center my-5 border-bottom border-warning pb-2 px-5">Registro de venta</h1>
        <div class="row col-5 ">
          <div class="col-5 mx-auto">
              <label for="">Fecha y hora</label>
              <input type="datetime" id="hora" class="form-control" name="fecha" readonly>
          </div>
          
          <div class="col-5 mx-auto">
              <label for="">Producto</label>
              <select name="producto" id="producto" class="form-select">
                <option value="" selected disabled>Escoja el producto</option>
              <?php
                    $inv="SELECT * FROM inventario";
                    $resul=mysqli_query($db,$inv);
                    while($valores = mysqli_fetch_array($resul)){
                      echo '<option class="" value="'.$valores['id_inv'].'">'.$valores['producto']. '</option>';
                    }
                  ?>
              </select>
          </div>
          <div class="col-5 mx-auto">
            <label for="">Cantidad</label>
            <input type="number" min="1" class="form-control" name="" id="cantidad">
          </div>
          <a href="#" class="btn btn-warning my-5" onclick=insertarFila()>Agregar producto</a>
        </div>
        <table id="tablaDatos" class="table table-bordered m-5 col-6">
          <thead>
          </tbody>
</table>
<script>
    function formato()  {
        var now = new Date();
        var fecha = now.getDate() + "-" + (now.getMonth()+1) + "-" + now.getFullYear();
        var hora = " "+(now.getHours()) + ":" + now.getMinutes();
        document.getElementById('hora').setAttribute("value",fecha + hora);
        document.getElementById('hora2').innerHTML = fecha + hora;
    }
    setInterval(formato, 1000);
</script>
    </div>

</form>
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