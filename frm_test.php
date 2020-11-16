<?php
    session_start();
    require_once 'database/db_membresias.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--<link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">-->
    <title>Spartan Gym - Registro</title>
</head>
<body class="back">

    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <h2 id="title" align="center">MEMBRESIAS</h2>
    <div class="color">
        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>

      <form action="database/db_rud_membresias.php?a=agregar" method="POST">   
            <div class="form-group">
                <label for="formGroupExampleInput">ID de la membresia</label>
                <input type="text" class="form-control" name="idTest"  placeholder="Ingrese el ID de la membresia" value="" >                                    
            </div> 

            <div class="form-group">
                <label for="formGroupExampleInput">Tipo de membresia</label>
                <input type="text" class="form-control" name="tipoTest" placeholder="Ingrese el tipo de membresia" value="">
            </div> 
            <div class="form-group">
                <label for="formGroupExampleInput">Precio de la membresia</label>
                <input type="text" class="form-control" name="precioTest" placeholder="Ingrese el precio de la membresia" value="">
            </div> 
            <br>
            <input type="submit" name="boton_Accion" class="btn btn-primary btn-lg" value="Agregar">
            <a href="membresia.php"type="button" class="btn btn-secondary btn-lg">VOLVER</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>