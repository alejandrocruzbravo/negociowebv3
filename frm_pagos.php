<?php
    session_start();
    require_once 'database/db_pagos.php';

    $accion=$_GET['a'];
    if($accion=='cobrar'){
        $title="COBRAR MEMBRESIA";

        $results=selectAll_socios();
        $nombre=$results[0]['socio'];
        $id=$results[0]['id'];
        
        $result_membresia=select_membresia($id);
        $membresia=$result_membresia[0]['tipo'];
        $precio=$result_membresia[0]['precio'];
        $boton = "COBRAR";

    } else if($accion=='cancelar'){
            
        $title="CANCELAR MEMBRESIA";
        $id=$_GET['id'];
        $result=selectId($id);
        $id=$result[0]['id'];
        $tipo=$result[0]['tipo'];
        $precio=$result[0]['precio'];
        $boton = "CANCELAR";

    } else if($accion=='detalles'){
        $title="DETALLES MEMBRESIA";
        $id=$_GET['id'];
        $result=selectId($id);
        $tipo=$result[0]['tipo'];
        $precio=$result[0]['precio'];
        $boton = "DETALLES";

       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Spartan Gym - Pagos</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 id="title" align="center">COBRAR</h2>
    <div class="color">
        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>
        <form action="database/db_rud_pagos.php?a=<?php echo $accion; ?>&id=<?php echo $id; ?>" method="POST">
        <label for="formGroupExampleInput">Socios registrados</label>
        <?php if($accion=='cobrar'){?>
                    <select name="socios" class="form-control" onchange="changeSocio(value);">
                    <?php
                        foreach ($results as $row){ ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['socio']; ?></option>
                        <?php } ?>
                    </select>
                <?php } ?>
            <div class="form-group">
                <label for="formGroupExampleInput">Membresia</label>
                <input type="text" class="form-control membresia" name="membresia" value="<?php echo $membresia?>">
            </div> 
            <div class="form-group">
                <label for="formGroupExampleInput">Precio</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $precio?>">
            </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>