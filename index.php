<?php
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');
?>
<!--<!DOCTYPE html>-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ferreteria Maracaibo">
    <meta name="keywords" content="herramientas, producto de limpieza, comida, catalogo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,  minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="vista/icon/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="vista/CSS/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/CSS/style.css">
    <title>Ferreteria Maracabo, C.A.</title>
</head>
<?php
    include('controlador/php/main.php');
?>
<body class="bg-light">
    <div class="container">
        <section>
            <div class="row">
                <div id="carouselExampleSlidesOnly" class="carousel slide m-3 p-1 border" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active bg-white">
                            <div class="col-md-6">
                                <img class="d-block position-relative mt-2 float-left img-fluid"  src="vista/image/vp.png">
                            </div>
                            <div class="bg-white">
                                <br><br>
                                <p class="h3 text-center">Aproveche nuestro descuento en pintura durante la época <br> Navideña</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img class="d-block w-100 position-relative float-left" src="vista/image/websocial1.jpg">
                            </div> 
                        </div>
                    </div>
                </div>
                <h2 class="display-4 col-md-12">Bienvenidos a la Navidad</h2>
                <div class="col-md-5">
                    <p class="text-justify">
                        Aquí podrá encontrar todos aquellos productos que necesite para remodelar su hogar.
                    </p>
                    <h4 class="h2">Descuento del 30%</h4>
                    <p class="text-justify">Este tipo de descuento es aplicado para nuestros clientes de forma programática. Solo tiene que suscribirse y podra aplicarlo</p>
                </div> 
                <div class="pl-5 border">
                    <?php
                        include('modelo/HTML/regform.php');
                    ?>
                </div>
            </div>
            <div class="col-md-12 mt-5 mb-5">
                <img src="vista/image/merry.jpg" alt="truper" class="img-thumbnail ">
            </div>

            <div id="carouselExampleSlidesOnly" class="carousel slide m-3 p-1 border" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="vista/image/truper.jpg" alt="truper" class="img-thumbnail position-relative w-100 float-left">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/pretul.png" alt="pretul" class="img-thumbnail position-relative w-100 mt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/foset.jpg" alt="foset" class="img-thumbnail position-relative w-100 mt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/hermex.png" alt="hermex" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/volteck.jpg" alt="hermex" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/stanley.png" alt="stanley" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/acesa.jpg" alt="acesa" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/brufer.jpg" alt="brufer" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/Champion.jpg" alt="Champion" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/Cisa.jpg" alt="Cisa" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/Pro Life.jpg" alt="Pro life" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/Taurus.jpg" alt="taurus" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/venceramica.jpg" alt="venceramica" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/image/Venepiezas.jpg" alt="venepiezas" class="img-thumbnail position-relative w-100 img-responsive smt-1">
                    </div>
                </div>
            </div>
            <div class="row blockquote">
                <div class="col-md-4 mt-2 col-sm-4">
                    <img src="vista/image/truper.jpg" alt="truper" class="img-thumbnail position-relative float-left">
                </div>
                <div class="col-md-4 mt-1 col-sm-4">
                    <img src="vista/image/pretul.png" alt="pretul" class="img-thumbnail position-relative mt-1">
                </div>
                <div class="col-md-4 mt-1 col-sm-4">
                    <img src="vista/image/foset.jpg" alt="foset" class="img-thumbnail position-relative mt-1">
                </div>
                <div class="col-md-4 mt-1 col-sm-4">
                    <img src="vista/image/hermex.png" alt="hermex" class="img-thumbnail position-relative img-responsive smt-1">
                </div>
                <div class="col-md-4 mt-1 col-sm-4">
                    <img src="vista/image/volteck.jpg" alt="hermex" class="img-thumbnail position-relative img-responsive smt-1">
                </div>
                <div class="col-md-4 mt-1 col-sm-4">
                    <img src="vista/image/stanley.png" alt="stanley" class="img-thumbnail position-relative img-responsive smt-1">
                </div>
            </div>
        </section>
    </div>
    <script src="controlador/JS/redireccion.js"></script>
    <script src="controlador/JS/jquery-3.4.1.js"></script>
    <script src="controlador/JS/popper.min.js"></script>
    <script src="controlador/JS/bootstrap.js"></script>
    <script src="controlador/JS/util.js"></script>
</body>
<footer class="blockquote-footer modal-footer">
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-3 col-sm-3">
                <h4>Sitio Web</h4>
                <p><a href="index.php">Inicio</a></p>
                <p><a href="productos.php">Productos</a></p>
            </section>
            <section class="col-md-3 col-sm-3">
                <h4>Ayuda</h4>
                <p><a href="contacto.php">Catalogo</a></p>
            </section>
            <section class="col-md-3 col-sm-3">
                <address>Zulia, Venezuela</address>
                <small>&copy; Derechos Reservados 2019</small> 
            </section>
            <section class="col-md-3 col-sm-3">
                <img class="position-relative mt-2 float-left" src="vista/icon/favicon.png" alt="logo-portafolio" height="50px">
            </section>
        </div>
    </div>
</footer>
</html>