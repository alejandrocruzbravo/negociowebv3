<?php 
    require_once 'database/db_rud_compras.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Spartan Gym - Tienda</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <br>
    <br>
    <br>
    <br>
    <h1 align="center" class="title">PRODUCTOS SPARTAN GYM</h1>
    <div class="color">
        <h2 align="center" class="title is-2">COMPRAR</h2>
        <div class="field">
            <form action="database/db_rud_compras.php" method="POST">
                <label class="label">Nombre completo</label>
                <div class="control">
                    <input name="usuario" class="input" type="text" placeholder="Ingrese su nombre completo">
                </div>
                </div>

                <div class="field">
                <label class="label">Correo electronico</label>
                <div class="control">
                    <input  name="email" class="input" type="text" placeholder="example@mail.com">
                </div>
                <p class="help">Sus datos personales no se compartiran con nadie más.</p>
                </div>


                <div class="field">
                <label class="label">Producto</label>
                <div class="control">
                    <div class="select">
                    <select name="producto">
                        <option>Seleccione un producto</option>
                        <option value="Hidrotein">Hidrotein</option>
                        <option value="Nitro Tech">Nitro Tech</option>
                        <option value="Carnivor">Carnivor</option>
                        <option value="Whey Pro">Whey Pro</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="field is-grouped">
                <div class="control">
                    <input type="submit" class="button is-success" value="COMPRAR PRODUCTO">
                </div>
                <div class="control">
                    <a class="button is-link is-light">VOLVER</a>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <?php require "partials/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>