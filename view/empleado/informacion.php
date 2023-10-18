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












    <div class="container">
    <h1 class="text-center bg-warning bg-opacity-50">¡Hola <?php echo ($empleado['nom']); ?>!</h1>
<p class="text-center fs-4"><i class="bi bi-info-circle-fill"></i>Tu informacion personal.</p>
<div class="row">

<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1 ><i class="bi bi-person-circle"></i>Nombres</h1>
<ul><li>
<p class="fs-3 "><?php echo ($empleado['nom']); ?></p> </li></ul>
</div>
<!-- col -->
<div  class="col-5  mx-auto  my-4">
<h1  >Apellidos</h1>
<ul><li>
<p class="fs-3"><?php echo ($empleado['apel']); ?></p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4"> 
<h1 ><i class="bi bi-envelope-fill"></i>Correo electronico</h1>
<ul><li>
<p class="fs-3"></p> <?php echo ($empleado['email']); ?></li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4">
<h1><i class="bi bi-telephone-fill"></i>Telefono</h1>
<ul><li>
<p class="fs-3"><?php echo ($empleado['tel']); ?></p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4">
<h1><i class="bi bi-geo-alt-fill"></i>Contrato</h1>
<ul><li>
<p class="fs-3"></p> <?php echo ($empleado['cont']); ?></li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-cash-coin"></i>Sueldo</h1>
<p class="fs-3"><?php echo ($empleado['sal']); ?></p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-calendar"></i></i>Fecha de ingreso</h1>
<p class="fs-3"><?php echo ($empleado['fecing']); ?></p> </li></ul>
</div>
<!-- col -->
<div class="col-5  mx-auto  my-4" >
<h1><i class="bi bi-calendar"></i></i>Horario</h1>
<p class="fs-3"><?php echo ($empleado['hor']); ?></p> </li></ul>
</div>
</body>
</html>