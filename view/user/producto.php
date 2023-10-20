<!-- VERIFICACIÓN -->
<?php include('../../controller/verificacion_user.php'); ?>

<?php 
require('../../controller/conexion.php');
$id=$_GET["id"];

$mostrarArticulo = "SELECT * FROM inventario WHERE id_inv='$id'";
$result = $db->query($mostrarArticulo);

if ($producto= mysqli_fetch_array($result)){

}
?>

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
        <?php include ('../../view/include/boostrap.php');?>

        <!-- LOGO ICON -->
        <?php include ('../../view/include/logo.php');?>

        <!-- META  -->
        <meta name="description" content="Panadería Mikiweys">
    
    
        
    </head>
        
<body data-bs-theme="light"> 

<?php include ('../../view/include/header.php');?>

<div class="container-fluid color shadow mt-5 p-5">
    <div class="row justify-content-center">
        <div class="col-6 p-5 row">
          <div class="col-12" >
              <img src="../../IMG/inventario/<?php echo $producto['imagen'];?>" alt="" class="img-fluid rounded">
          </div>
        </div>
        <div class="col-6 p-5">
                <h1><?php echo $producto['producto'];?></h1>
            <div class="row">
                <p><?php echo $producto['descrip'];?></p>
                <p class="fs-1 simoneta">$<?php echo $producto['preuni'];?></p>
                <a class="btn btn-warning my-2" href="">Comprar ahora</a>
                <a class="btn bordenaranja naranja bhovernaranja" href="">Agregar al carrito</a>
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