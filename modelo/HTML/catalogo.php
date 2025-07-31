
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ferreteria Maracaibo">
    <meta name="keywords" content="herramientas, producto de limpieza, comida">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../vista/icon/favicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="../../vista/CSS/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../../vista/CSS/style.css">
    <title>Catalogo</title>
</head>

<?php
    include('../../../FermacaRework/controlador/php/main.php');
?>
<body class="bg-light">
    <div class="container">
        <section>
            <div class="row">
                <h2 class="display-5 col-md-10">Información</h2>
            </div>
            <div class="col-md-8 text-justified">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat non, ducimus porro modi, esse exercitationem commodi sint quasi soluta hic pariatur in incidunt eum quo aspernatur expedita ullam! Expedita!</p>
            </div>
        </section>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!--
            <aside class="col-md-2 border mb-2 ml-1 float-left">
                <h3 class="h6">Departamento</h3>
                <ul>
                    <li><a href="alimentos.php">Alimentos</a></li>
                </ul>
            </aside>-->
            <div class="col-md-1"><br></div>
            <aside class="col-md-10 border m-2">
                <?php
                    include("../../../FermacaRework/controlador/php/navProduc.php");
                ?>                   
            </aside>
        </div>
    </div>


    <script src="../../controlador/JS/jquery-3.4.1.js"></script>
    <script src="../../controlador/JS/popper.min.js"></script>
    <script src="../../controlador/JS/bootstrap.min.js"></script>
    <script src="../../controlador/JS/bootstrap.bundle.min.js"></script>
    <script src="../../controlador/JS/redireccion.js"></script>
</body>
<footer class="blockquote-footer modal-footer">
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-3">
                <h4>Sitio Web</h4>
                <p><a href="index.php">Inicio</a></p>
                <p><a href="productos.php">Catalogo</a></p>
            </section>
            <section class="col-md-3">
                <h4>Ayuda</h4>
                <p><a href="contacto.php">Contacto</a></p>
            </section>
            <section class="col-md-3">
                <address>Zulia, Venezuela</address>
                <small>&copy; Derechos Reservados 2019</small> 
            </section>
            <section class="col-md-3">
                <img class="position-relative mt-2 float-left" src="../../vista/icon/favicon.png" alt="logo-portafolio" height="50px">
            </section>
        </div>
    </div>
</footer>
</html>