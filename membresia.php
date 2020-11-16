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
    <title>Spartan Gym - Membresia</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 id="title" align="center">MEMBRESIAS</h2>
    <br>
    <table class="table table-hover color">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO</th>
                <th scope="col">PRECIO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $results=selectAll();
                foreach ($results as $row){ ?>
            <tr>
                <td><?php echo $row['id']; ?> </td>
                <td><?php echo $row['tipo']; ?> </td>
                <td><?php echo $row['precio']; ?></td>
                <td><a class="btn btn-info btn-sm" href="frm_membresias.php?a=modificar&id=<?php echo $row['id']; ?>">MODIFICAR</button></a>
                    <a class="btn btn-danger btn-sm" href="frm_membresias.php?a=eliminar&id=<?php echo $row['id']; ?>">ELIMINAR</button></a>
                </td>
            </tr>
            <?php
                }?>      
        </tbody>
    </table>
    <a href="frm_membresias.php?a=agregar" type="button" class="btn btn-primary btn-lg"><img src="img/new.png" widht="35px" width="35px">AGREGAR MEMBRESIA</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>