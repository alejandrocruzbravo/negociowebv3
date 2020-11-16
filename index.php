<?php
    session_start();
    require "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-mobile/js/jquery.mobile.js"></script>
    <link href="node_modules/bulma/css/bulma.min.css" rel="stylesheet">
    <title>Spartan Gym</title>
</head>
<body class="back">
    <?php require "partials/header.php"?>
    
    <section id="inicio">
        <br>
        <br>
        <br>
        <br>
        <p id="welcome" align="center">BIEVENIDO</p>
        <br>
        <br>
        <br>
        <br>
        <a href="#sec1">Continuar</a>
    </section>
    <section id="sec1">
        <div class="contenedor-texto">
            <h2>¿QUÉ SOMOS?</h2>
            <p>Se parte de nuestra familia</p>
            <p>Spartan Gym se enorgullece de ofrecer clases de fitness divertidas y duras. Especializado en fuerza y acondicionamiento, entrenamiento espartano y carrera de obstáculos, y bootcamps para empoderar a otros para alcanzar sus metas de fitness. Ofrecemos membresías de gimnasio, entrenamiento personal y clases de fitness en grupo especializadas. Cuando te registras con nosotros, tu no te unes a un gimnasio, ¡te unes a una familia!</p>
            <a href="#sec2">Continuar</a>
        </div>
        <img src="img/section1.svg">
    </section>
    <section id="sec2">
        <div class="contenedor-texto">
            <h2>RUTINAS DE EJERCICIO</h2>
            <p>Es un proceso lento pero nunca te detengas.</p>
            <p>En SPARTAN GYM estamos especializados en Rutinas de Gimnasio y en técnicas de musculación tanto para principiantes que se acaban de apuntar al gimnasio como para los más avanzados. Las rutinas de gimnasio no solo se pueden realizar en un centro de Fitness, también puedes realizarlas en tu casa, por eso tenemos además una completa selección de rutinas de pesas para hacer en casa.</p>
            <a href="#sec3">Continuar</a>
        </div>
        <img src="img/section2.svg">
    </section>
    <section id="sec3">
        <div class="contenedor-texto">
            <h2>ELECTROESTIMULACIÓN Y FISIOTERAPIAS</h2>
            <p>La EEM ayuda a la recuperación de lesiones, así como un incremento de la masa muscular</p>
            <p>La electroestimulación muscular (EEM) o estimulación neuromuscular eléctrica (ENE) o electroestimulación, es la forma de ejercitar usando impulsos eléctricos. Los impulsos se generan en un dispositivo que se aplica con electrodos en la piel próxima a los músculos que se pretenden estimular. Los impulsos imitan el potencial de acción proveniente del sistema nervioso central, causando la contracción muscular. Los electrodos generalmente se adhieren a la piel. La EEM es una forma de electroterapia o de entrenamiento muscular. Diversos autores la citan como una técnica complementaria para el entrenamiento deportivo, existiendo numerosos estudios publicados al respecto. Para determinar cuántas sesiones necesito. Primero se debe determinar qué propósito o necesidades posee el paciente o usuario. De allí partirá la idea central de un cronograma de sesiones Los número de sesiones partirá de acuerdo a la duración de las misma. Si te aplicas sesiones de gran duración. La repetición de la misma es más prolongada. Para así no sobrecargar el músculo en el cual se está trabajando.</p>
            <a href="#inicio">Volver</a>
        </div>
        <img src="img/section3.svg">
    </section>
    <?php require "partials/footer.php"?>
</body>
</html>