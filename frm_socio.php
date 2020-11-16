<?php
    session_start();
    require_once 'database/db_socio.php';

    $accion=$_GET['a'];
    if($accion=='agregar'){
        $title="AÑADIR UN NUEVO SOCIO";
        $nombre="";
        $apellidoPaterno="";
        $apellidoMaterno="";
        $mensualidad="";
        $boton = "AGREGAR";

    } else if($accion=='eliminar'){
            
        $title="ELIMINAR SOCIO";
        $id=$_GET['id'];
        $result=selectId($id);
        $nombre=$result[0]['nombre'];
        $apellidoPaterno=$result[0]['apellido1'];
        $apellidoMaterno=$result[0]['apellido2'];
        $mensualidad=$result[0]['mensualidad'];
        $boton = "ELIMINAR";

    } else if($accion=='modificar'){
        $title="MODIFICAR SOCIO";
        $id=$_GET['id'];
        $result=selectId($id);
        $nombre=$result[0]['nombre'];
        $apellidoPaterno=$result[0]['apellido1'];
        $apellidoMaterno=$result[0]['apellido2'];
        $mensualidad=$result[0]['mensualidad'];
        $boton = "MODIFICAR";

    } else if($accion=='cobrar'){
        $title="COBRAR SOCIO";
        $id=$_GET['id'];
        $result=selectId($id);
        $nombre=$result[0]['nombre'];
        $apellidoPaterno=$result[0]['apellido1'];
        $apellidoMaterno=$result[0]['apellido2'];
        $mensualidad=$result[0]['mensualidad'];
        $cantidad="";
        $concepto="";
        $boton = "COBRAR";
    }
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
    <h2 id="title" align="center"> SOCIOS</h2>
    <div class="color">
        <h4 class="subtitle" align="center"><?php echo $title; ?></h4>
        <?php if($accion <> "agregar"){?>
        <form action="database/db_rud_socio.php?a=<?php echo $accion; ?>&id=<?php echo $id; ?>" method="POST">
        <?php } else {?>
            <form action="database/db_rud_socio.php?a=<?php echo $accion; ?>" method="POST">
        <?php }?>
        <div class="form-group">
                <label for="formGroupExampleInput">Nombre</label>
                <input type="text" class="form-control" name="nombre"  placeholder="Ingrese el nombre del socio" value="<?php echo $nombre?>">

            <div class="form-group">
                <label for="formGroupExampleInput">Apellidos paterno</label>
                <input type="text" class="form-control" name="apellido1" placeholder="Ingrese el apellido paterno del socio" value="<?php echo $apellidoPaterno?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Apellidos materno</label>
                <input type="text" class="form-control" name="apellido2" placeholder="Ingrese el apellido materno del socio" value="<?php echo $apellidoMaterno?>">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Tipo de mensualidad</label>
                <?php if($accion=='agregar'){?>
                    <select name="mensualidad" class="form-control">
                    <?php
                        $results=selectAll_Membresias();
                        foreach ($results as $row){ ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['tipo']; ?></option>
                        <?php } ?>
                    </select>
                <?php } else {?>

                    <input type="text" class="form-control" name="mensualidad" placeholder="Ingrese el apellido materno del socio" value="<?php echo $mensualidad?>">
                <?php } ?>
            </div>
            <?php if($accion=="cobrar"){ ?>
                <div class="form-group">
                    <label for="formGroupExampleInput">CANTIDAD</label>
                    <input type="text" class="form-control" name="cantidad" placeholder="Número de meses" value="<?php echo $cantidad?>">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">CONCEPTO</label>
                    <input type="text" class="form-control" name="concepto" placeholder="Pago (mes)(año)" value="<?php echo $concepto?>">
                </div> 
            <?php } ?>
            <br>
            <input type="submit" name="boton_Accion" class="btn btn-primary btn-lg" value="<?php echo $boton;?>">
            <a href="socios.php"type="button" class="btn btn-secondary btn-lg">VOLVER</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>