<?php
    session_start();
   // require_once 'db_lista_socio.php'
    require_once 'database/db_socio.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Spartan Gym - Socios</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 id="title" align="center">SOCIOS</h2>
    <br>
    <a href="frm_socio.php?a=agregar" type="button" class="btn btn-primary btn-lg"><img src="img/new.png" widht="35px" width="35px">AGREGAR SOCIO</a>
<table class="table table-hover colorlist">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">MENSUALIDAD</th>
      <th scope="col">REGISTRO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $results=selectAll();
       foreach ($results as $row){ ?>
       <tr>
          <td><?php echo $row['id']; ?> </td>
          <td><?php echo $row['nombre']; ?> </td>
          <td><?php echo $row['apellido1']; ?> <?php echo $row['apellido2']; ?> </td>
          <td><?php echo $row['mensualidad']; ?> </td>
          <td><?php echo $row['fecha']; ?> </td>
          <td><a class="btn btn-success btn-sm" href="frm_socio.php?a=cobrar&id=<?php echo $row['id']; ?>">COBRAR</button></a>
              <a class="btn btn-info btn-sm" href="frm_socio.php?a=modificar&id=<?php echo $row['id']; ?>">MODIFICAR</button></a>
              <a class="btn btn-danger btn-sm" href="frm_socio.php?a=eliminar&id=<?php echo $row['id']; ?>">ELIMINAR</button></a>
          </td>
        </td>
      </tr>      
  </tbody>
    <?php
      }
      ?>
</table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>