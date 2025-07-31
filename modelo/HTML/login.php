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
    <title>Login</title>
</head>
<nav class="navbar navbar-expand-md navbar-light bg-white ">
    <img class="position-relative mt-2 float-left" src="../../vista/icon/favicon.png" alt="logo-portafolio" height=" 100px">
    <h1 class="container">Ferreteria Maracaibo, C.A.</h1>
    <div class="container">
        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navBar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navBar" class="collapse navbar-collapse">
            <ul class=" navbar-nav  ml-auto">
                <li class="nav-item"><a class="nav-link" href="../../../FermacaRework/index.php">Inicio </a></li>
                <li class="nav-item"><a class="nav-link" href="catalogo.php">Catalogo</a></li>
                <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
<body class="bg-light">
    <div class="container">
        <section>
            <div class="row mt-2">
                <div class="col-md-1"><br></div>
                <h2 class="display-5 col-md-11">Iniciar Sesion</h2>
                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-12 justify-content-md-center justify-content-sm-center justify-content-center">
                <div id="managerError">-</div>
                    <form method="POST" action="../../controlador/php/login.php">
                        <table>
                            <tr>
                                <td>Usuario:</td>
                                <td><input type="text" name="usuario" id="txtInput"></td>
                            </tr>
                            <tr>
                                <td><p class="mt-3">Contraseña:</p></td>
                                <td><input type="password" name="contraseña" id="txtIC"></td>
                            </tr>
                        </table>
                        
                        <button id="btLogin">Login</button>
                        <br><br><br>
                        ¿No tienes cuenta? Has click aqui
                        <button type="button" onclick="enviarRegis()">Registrarse</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="../../controlador/JS/errorLog.js"></script>
    <script src="../../controlador/JS/jquery-3.4.1.js"></script>
    <script src="../../controlador/JS/popper.min.js"></script>
    <script src="../../controlador/JS/bootstrap.min.js"></script>
    <script src="../../controlador/JS/redireccion.js"></script>
</body>
<footer class="blockquote-footer modal-footer">
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-3 col-sm-3">
                <h4>Sitio Web</h4>
                <p><a href="index.php">Inicio</a></p>
                <p><a href="productos.php">Catalogo</a></p>
            </section>
            <section class="col-md-3 col-sm-3">
                <h4>Ayuda</h4>
                <p><a href="contacto.php">Contacto</a></p>
            </section>
            <section class="col-md-3 col-sm-3">
                <address>Zulia, Venezuela</address>
                <small>&copy; Derechos Reservados 2019</small> 
            </section>
            <section class="col-md-3 col-sm-3">
                <img class="position-relative mt-2 float-left" src="../../vista/icon/favicon.png" alt="logo-portafolio" height="50px">
            </section>
        </div>
    </div>
</footer>
</html>