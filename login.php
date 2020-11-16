<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['rol']);
    if(!isset($_SESSION['email'])){
        $_SESSION['mensaje_registro'] = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Spartan Gym - Login</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>

    <section id="sec1">
        <br>
        <form action="database/db_login.php" method="post" class="form">
            <h2 class="title is-2" align="center">INICIO DE SESIÓN</h2>
            <div class="form-group">
                <label>CORREO ELECTRONICO</label>
                <div class="field">
                    <div class="control">
                        <input name="email" class="input is-primary" type="text" placeholder="example@mail.com">
                    </div>
                </div>
            </div>
            <br>
            <div class="field">
                <label>CONTRASEÑA</label>
                <div class="control">
                    <input name="password" class="input is-primary" type="password" placeholder="Contraseña">
                </div>
            </div>
            <br>
            <div class="buttons">
                <input type="submit" class="button is-primary" value="Acceder">
                <a href="signup.php"class="button is-link">Registrarse</a>
            </div>
        </form>
    </section>
    <?php require "partials/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>