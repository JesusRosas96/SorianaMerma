<?php
	session_start();
	if(!$_SESSION){
		header ("Location: ../Merma/index.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Control de Merma | Soriana</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-mergedH.css">
    <link rel="stylesheet" href="css/style-all.css">
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/uikit.almost-flat.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/components/notify.almost-flat.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/css/components/tooltip.almost-flat.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/uikit.min.js"/>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/components/notify.min.js"/>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.4/js/components/tooltip.min.js"/>"></script>
	<script src="moz-extension://4ffbee4a-fed2-4c24-9d68-37037a527952/assets/prompt.js"></script>
</head>

<body>
	<header role="banner" class="probootstrap-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="logo col-md-3 col-sm-1 col-xs-4" ></div>
                </div>
            </div>
            <div class="container">
            	<div class="mobile-menu-overlay"></div>
                <nav role="navigation" class="probootstrap-nav hidden-xs">
                    <ul class="probootstrap-main-nav" >
                        <li><img src="../Merma/img/home.png" style="width: 7%; margin-right: 5px"><a href="../Merma/indexIn.php">Inicio</a></li>
                        <li><img src="../Merma/img/logout.png" style="width: 7%; margin-right: 5px"><a href="../Merma/php/logout.php">Cerrar Sesión</a></li>
                      </ul>
                </nav>
            </div>
    </header>

    <div class="probootstrap-main-content">
            <section class="probootstrap-slider flexslider">
                <ul class="slides">
                    <!-- class="overlay" -->
                    <li class="flex-active-slide" style='background-image: url("img/t4.jpg"); background-size: cover; background-position: center center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;' data-thumb-alt=""/>
                    <li class="" style='background-image: url("img/t3.jpg"); background-size: cover; background-position: center center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;' data-thumb-alt=""/>
                    <li class="" style='background-image: url("img/t2.jpg"); background-size: cover; background-position: center center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;' data-thumb-alt=""/>
                    <li class="" style='background-image: url("img/t1.jpg"); background-size: cover; background-position: center center; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;' data-thumb-alt=""/>
                </ul>
                <ol class="flex-control-nav flex-control-paging">
                    <li><a href="#" class="flex-active">1</a></li>
                    <li><a href="#" class="">2</a></li>
                    <li><a href="#" class="">3</a></li>
                    <li><a href="#" class="">4</a></li>
                </ol>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                    <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
                </ul>
            </section>
            <section class="probootstrap-section probootstrap-bg-white">
                <div class="row">
                    <div style="color: #fff; font-size: 15px; margin-left: 64px;" class="col-md-3"></div>
                    <div class="col-md-8 hidden-xs hidden-sm" style="margin-bottom: -15px;">
                        <p>CONTROL DE REGISTROS DE MERMA</p>
                    </div>
                </div>
                <div class="container-fluid buscador">
                    <div class="row">
                        <div class="margen col-md-3" id="categories">
                            <p class="categoria">
                                <a class="category" href="/Merma/inventario.php">INVENTARIO</a>
                            </p>
                            <p class="categoria">
                                <a class="category" href="/Merma/alta.php">ALTA DE MERMA</a>
                            </p>
                            <p class="categoria">
                                <a class="category" href="/Merma/actaDev.php">ACTAS DE DEVOLUCIÓN</a>
                            </p>
                            <p class="categoria">
                                <a class="category" href="">ACTAS DE DESTRUCCIÓN</a>
                            </p>
                            <p class="categoria">
                                <a class="category" href="/Merma/altaP.php">ALTA DE PRODUCTO</a>
                            </p>
                        </div>
                        <div style="padding-left: 15px;" class="col-md-8 ">
                            <div class="row">
                                <p>Soriana tu mejor opción:</p>
                                <p style="text-align: justify;">
                                    Encuentra lo mejor en electrónica como: pantallas, teatros en casa, los mejores sistemas de audio, cámaras y drones. Tenemos los más novedosos títulos de videojuegos para todas las consolas de última generación como Xbox, Nintendo y PlayStation. Contamos además con un catálogo especial con las marcas que amas de electrónica, como Samsung, LG, Bose,  Harman Kardon, Chromecast, Roku, Marshall, Jbl, Fujifilm, Beats, entre otras!
                                </p>
                                <p style="text-align: justify;">
                                    Dentro de nuestro catálogo de productos de cómputo encontrarás la  PC, equipos Apple,  Tablet o  Laptop ideal para ti. Así mismo puedes encontrar consumibles y artículos varios que facilitarán tu vida.
                                </p>
                                <p style="text-align: justify;">
                                    Contamos también con los mejores teléfonos celulares de marcas como Xiaomi, Motorola y  smartphones Android de diferentes gamas o iPhones, para que puedas estar siempre comunicado.
                                </p>
                                <p style="text-align: justify;">
                                    Pensando en la vida cotidiana de nuestros clientes, tenemos una gran variedad de productos para el hogar como muebles importados y nacionales, lámparas de techo  y piso, electrodomésticos o línea blanca y  accesorios decorativos  para tu baño, jardín o recámara. También te invitamos a conocer nuestro catálogo de ferretería</a>. 
                                </p>
                                <p style="text-align: justify;">
                                    También en cocina tenemos las marcas que amas, donde encontrarás todos los utensilios que siempre quisiste en tu cocina. Encuentra accesorios de tus marcas favoritas como Vasconia, T-fal,  Pedrini, FlavorStone,  Nutribullet, Oster ¡y muchas más! 
                                </p>
                                <p style="text-align: justify;">
                                    Y como los niños no se pueden quedar atrás, contamos con una amplia gama de juguetes para todas las edades. Bicicletas, muñecas, carritos, Super héroes, toboganes, princesas, de las mejores marcas como Mattel, Fisher Price, Marvel, Starwars, Disney, Lego, Feber y todo lo que puedas imaginar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>       
        </div>
    
    <script type="text/javascript" src="../Merma/js/scripts.min.js"></script>
    <script type="text/javascript" src="../Merma/js/main.min.js"></script>
    <script type="text/javascript" src="../Merma/js/jquery.autocomplete.js"></script>
</body>
</html>