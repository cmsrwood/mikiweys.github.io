<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion | MIKIWEY'S APP</title>
    <?php  include ('../include/boostrap.php')?>
    <?php  include ('../../controller/sesion.php')?>
</head>
<body>
<?php  include ('../include/header_emp.php');

$emailemp= $_SESSION['mail'];
$consulta= "SELECT * FROM empleados WHERE email= '$emailemp'";
$sqlquery =mysqli_query($db,$consulta);
$resultadoemp = $sqlquery;
$empleado = mysqli_fetch_assoc($resultadoemp);


?>




<?php echo ($empleado['nom']); ?>
<?php echo ($empleado['apel']); ?>
<?php echo ($empleado['fecing']); ?>
<?php echo ($empleado['cont']); ?>
<?php echo ($empleado['tel']); ?>
<?php echo ($empleado['hor']); ?>
<?php echo ($empleado['sal']); ?>

    <div class="container">
    <h1 class="text-center bg-warning bg-opacity-50">¡Hola <?php echo ($empleado['nom']); ?>!</h1>
<p class="text-center fs-4"><i class="bi bi-info-circle-fill"></i>Tu informacion personal.</p>
<div class="row">

<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1 ><i class="bi bi-person-circle"></i>Nombres</h1>
<ul><li>
<p class="fs-3 ">Brayan Alexander</p> </li></ul>
</div>
<!-- col -->
<div  class="col-5  mx-auto  my-4">
<h1  >Apellidos</h1>
<ul><li>
<p class="fs-3">Carmona Rojas</p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4"> 
<h1 ><i class="bi bi-envelope-fill"></i>Correo electronico</h1>
<ul><li>
<p class="fs-3">bcarmona@gmail.com</p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4">
<h1><i class="bi bi-telephone-fill"></i>Telefono</h1>
<ul><li>
<p class="fs-3">3218584440</p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4">
<h1><i class="bi bi-geo-alt-fill"></i>Contrato</h1>
<ul><li>
<p class="fs-3"></p> Contrato</li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-cash-coin"></i>Sueldo</h1>
<p class="fs-3">1.300.000</p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-cash-coin"></i>Fecha de ingreso</h1>
<p class="fs-3">10/12/2022</p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-cash-coin"></i>Horario</h1>
<p class="fs-3">Mañana</p> </li></ul>
</div>
</body>
</html>