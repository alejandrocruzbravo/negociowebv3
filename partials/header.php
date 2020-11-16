<header class="header displaybanner">
    <div class="wrapper">
        <div class="logo"><img src="img/logo.png" width="60px" height="100px">SPARTAN GYM</div>
        <nav class="nav">
            <a class="nav-a" href="index.php">Inicio</a>
            <a class="nav-a" href="shop.php">Productos</a>
            <a class="nav-a" href="login.php">Iniciar sesión</a>
            <a class="nav-a" href="#footer">Contactanos</a>

            <?php if(isset($_SESSION['rol'])){
                    if($_SESSION['rol'] == 1){?>
                        <a class="nav-a" href="panel.php">Panel</a>
                <?php }?>
            <?php }?>
        </nav>
        <form action="database/logout.php" method="post">
            
                <?php if(isset($_SESSION['email'])){ ?>
                <?php $name_user = $_SESSION['email']?>
                <p class="cerrar"><?= $name_user?></p>
                <input type="submit" value="Cerrar sesión" class="cerrar">
                <?php } ?>
        </form>
    </div>
</header>