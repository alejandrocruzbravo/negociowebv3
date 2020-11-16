<?php
    session_start();
    require_once 'database/db_pagos.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--<link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">-->
    <title>Spartan Gym - Pagos</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 id="title" align="center">PAGOS</h2>
    <br>
<table class="table table-hover colorlist">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">FECHA DE PAGO</th>
      <th scope="col">SOCIO</th>
      <th scope="col">MEMBRESIA</th>
      <th scope="col">PRECIO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">CONCEPTO</th>
      <th scope="col">TOTAL</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $results=selectAll();
       foreach ($results as $row){ ?>
       <tr>
          <td><?php echo $row['id']; ?> </td>
          <td><?php echo $row['fecha']; ?> </td>
          <td><?php echo $row['socio']; ?> </td>
          <td><?php echo $row['membresia']; ?> </td>
          <td><?php echo $row['precio']; ?> </td>
          <td><?php echo $row['cantidad']; ?> </td>
          <td><?php echo $row['concepto']; ?> </td>
          <td><?php echo $row['total']; ?> </td>
          <td><?php echo $row['st']; ?> </td>
          <td><form action="database/db_rud_pagos.php?a=cancelar&id=<?php echo $row['id']; ?>" method="POST">
            <input type="submit" name="boton_Accion" class="btn btn-danger btn-lg" value="CANCELAR">
          </form>
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