<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empleados | MIKIWEY'S APP</title>
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
  <link rel="shortcut icon" href="../IMG/todo/logo2.ico">
  <link rel="icon" sizes="192x192" href="../IMG/todo/logo2.ico">
  <link rel="favicon" href="../IMG/todo/logo2.ico">
  <link rel="apple-touch-icon" href="../IMG/todo/logo2.ico">

  <!-- META  -->
  <meta name="description" content="Panadería Mikiweys">
</head>
<body class="">

<div class="container shadow p-5 color">
  <nav class="d-flex py-5">
    <h1>Empleados</h1>
    <button class="btn btn-warning mx-2">Nuevo</button>
    <form action="" class="d-flex">
      <input type="search" placeholder="Buscar" class="form-control">
      <button class="btn"><i class="bi bi-search"></i></button>
    </form>
    <select class="form-select" name="" id=""> 
      <option value="1">A-Z</option>
      <option value="2">Z-A</option>
      <option value="3">Menor Salario</option>
      <option value="4">Mayor Salario</option>
    </select>
  </nav>
  
<table class="table bg-white table-bordered">
    <thead>
      <tr class="bnaranja">
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Contrato</th>
        <th scope="col">Telefono</th>
        <th scope="col">Salario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td>Carolina</td>
        <td>Castillo</td>
        <td>17/07/22</td>
        <td>Fijo</td>
        <td>3142171737</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Brayan</td>
        <td>Carmona</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3112150484</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Dayana</td>
        <td>Martinez</td>
        <td>18/06/2022</td>
        <td>Indefinido</td>
        <td>3182263284</td>
        <td>1.200.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Diana</td>
        <td>Rojas</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3106699846</td>
        <td>2.000.000</td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td>Jose</td>
        <td>Carmona</td>
        <td>01/01/2022</td>
        <td>Fijo</td>
        <td>3214778351</td>
        <td>2.000.000</td>
      </tr>
    </tbody>
  </table>
<div class="row justify-content-center">
  <div class="col justify-content-center row p-3"> <button type="button" class="btn btn-success w-25"><i class="bi bi-arrow-bar-up"></i></button> </div>
  <div class="col justify-content-center row p-3"><button type="button" class="btn btn-danger w-25"><i class="bi bi-trash"></i></button></div>
<div class="col justify-content-center row p-3"><button type="button" class="btn btn-warning w-25"><i class="bi bi-pen"></i></button></div>
</div>
</div>
</body>
  </html>