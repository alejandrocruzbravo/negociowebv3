<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Spartan Gym - Panel</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    <section id="sec2">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title is-1">PANEL DE CONTROL</h1>
        <div class="block">
             Bienvenido al panel de control de <strong>administración</strong>.
        </div>
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        INSTRUCTORES REGISTRADOS DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Listado de todos los instructores registrados en el gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="instructores.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title">
                            MEMBRESIAS DISPONIBLES DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Listado de las membresias disponibles del gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="membresia.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title">
                        REGISTRO DE COMPRAS DE LA TIENDA
                        </p>
                        <p class="subtitle">
                        Registro de compras de la tienda en linea de Spartan Gym.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="register.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title">
                        SOCIOS Y PAGOS DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                        Listado de socios y cobros del gimnasio registrados en el gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="socios.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
            <div class="column">
            <div class="card">
                    <div class="card-content">
                        <p class="title">
                        REGISTRO DE PAGOS DEL GIMNASIO
                        </p>
                        <p class="subtitle">
                         Registro de pagos del gimnasio registrados en el gimnasio.
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                        <span>
                            <a href="pagos.php">ACCEDER</a>
                        </span>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>