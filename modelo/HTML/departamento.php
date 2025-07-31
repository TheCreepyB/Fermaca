<!--<!DOCTYPE html>-->
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
    session_start();
    if(isset($_SESSION['usuario'])){
        //echo "Acceso no permitido!";
        echo "<div class='mt-1 float-left'>Sesion de ".$_SESSION['usuario']."</div>"."<button type='button' onclick='logOut()'>Cerrar Sesion</button>";

        echo "
        <nav class='navbar navbar-expand-md navbar-light bg-white '>
            <img class='position-relative mt-2 float-left' src='../../vista/icon/favicon.png' alt='logo-portafolio' height='100px'>
            <h1 class='container'>Ferreteria Maracaibo, C.A.</h1>
            <div class='container'>
                <button type='button' class='navbar-toggler ml-auto' data-toggle='collapse' data-target='#navBar'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div id='navBar' class='collapse navbar-collapse'>
                    <ul class='navbar-nav  ml-auto'>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/index.php'>Inicio </a></li>
                        <li class='nav-item'><a class='nav-link' href='catalogo.php'>Catalogo</a></li>
                        <li class='nav-item'><a class='nav-link' href='contacto.php'>Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>";
    }else{
        echo "
        <nav class='navbar navbar-expand-md navbar-light bg-white '>
            <img class='position-relative mt-2 float-left' src='../../vista/icon/favicon.png' alt='logo-Fermaca' height='100px'>
            <h1 class='container'>Ferreteria Maracaibo, C.A.</h1>
            <div class='container'>
                <button type='button' class='navbar-toggler ml-auto' data-toggle='collapse' data-target='#navBar'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div id='navBar' class='collapse navbar-collapse'>
                    <ul class='navbar-nav  ml-auto'>
                        <li class='nav-item'><a class='nav-link' href='../../../FermacaRework/index.php'>Inicio </a></li>
                        <li class='nav-item'><a class='nav-link' href='catalogo.php'>Catalogo</a></li>
                        <li class='nav-item'><a class='nav-link' href='contacto.php'>Contacto</a></li>
                        <button type='button' onclick='enviarLogin()'>Login</button>
                    </ul>
                </div>
            </div>
        </nav>";
    }
?>

<body class="bg-light">
    <?php	
        include("../../controlador/php/consultProduct.php");
    ?>
    <div class="container">
        <div class="row">
            

        </div>
    </div>
    <script src="../../controlador/JS/jquery-3.4.1.js"></script>
    <script src="../../controlador/JS/popper.min.js"></script>
    <script src="../../controlador/JS/bootstrap.min.js"></script>
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