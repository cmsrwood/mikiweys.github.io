<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario | MIKIWEY'S APP</title>
    <?php  include ('../include/boostrap.php')?>
    <?php  include ('../../controller/sesion.php')?>
</head>

<body>
    <div class="container">
    <h1 class="text-center ">Hola <?php echo ($_SESSION['nom']) ?></h1>
<p class="text-center">¡Este es tu horario de esta semana!</p>
<h1 class="text-center">Horario mañana</h1>
    <table class="table table-bordered border-1 bg-white">
      <tr class=" bg-warning" >
        <th scope="col">Dias</th>
        <th scope="col" class="" >Mañana</th>
        <th scope="col" class="" >Tarde</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Lunes</th>
        <th class="bg-success"> 6:00am - 2:00pm</th>
        <th>2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Martes</th>
        <th  class="bg-success">6:00am - 2:00pm</th>
        <th>2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Miercoles</th>
        <th class="bg-success">6:00am - 2:00pm</th>
        <th>2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Jueves</th>
        <th class="bg-success">6:00am - 2:00pm</th>
        <th >2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Viernes</th>
        <th class="bg-success">6:00am - 2:00pm</th>
        <th>2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Sabado</th>
        <th class="bg-success">6:00am - 2:00pm</th>
        <th >2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Domingo </th>
        <th class="bg-success">6:00am - 2:00pm</th>
        <th>2:00pm - 10:00pm</th>
       </tr>
    </table>
    <h1 class="text-center">Horario Tarde</h1>
    <table class="table table-bordered border-1 bg-white">
    <thead>
      <tr class=" bg-warning" >
        <th scope="col">Dias</th>
        <th scope="col" class="" >Mañana</th>
        <th scope="col" class="" >Tarde</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Lunes</th>
        <th>6:00am - 2:00pm</th>
        <th  class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Martes</th>
        <th  >6:00am - 2:00pm</th>
        <th class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Miercoles</th>
        <th >6:00am - 2:00pm</th>
        <th class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Jueves</th>
        <th >6:00am - 2:00pm</th>
        <th class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Viernes</th>
        <th>6:00am - 2:00pm</th>
        <th  class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Sabado</th>
        <th >6:00am - 2:00pm</th>
        <th class="bg-success">2:00pm - 10:00pm</th>
       </tr>
       <tr>
        <th class="bg-warning bg-opacity-50">Domingo </th>
        <th >6:00am - 2:00pm</th>
        <th class="bg-success">2:00pm - 10:00pm</th>
       </tr>
    </thead>
    <tbody>
    </div>
   
</body>
</html>