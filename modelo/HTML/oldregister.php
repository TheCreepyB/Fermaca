<!--<!DOCTYPE html>-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ferreteria Maracaibo">
    <meta name="keywords" content="herramientas, producto de limpieza, comida, catalogo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no,  minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="vista/icon/favicon.png" type="/FermacaV1/image/png" sizes="16x16">
    <link rel="stylesheet" href="vista/CSS/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/CSS/style.css">
    <title>Login</title>
</head>
<body>
    <header id="title">
            <h1>
                <img src="../image/favicon.png" id="LogoFermaca">
                Ferreteria Maracaibo, C.A.
            </h1>
    </header>
    <main>
        <h1>Registro</h1>
        <?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            include('../php/register.php');
        ?>
        <form id="formReg" method="POST" action="../php/register.php">
            <table border=0>
                <tr>
                    <td>Cedula / RIF:</td>
                    <td><input type="text" name="RIF" id="RIF" ></td>
                </tr>
                <tr>
                    <td>Nombre o razón social:</td>
                    <td><input type="text" name="razonSocial" id="razonSocial"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="direccion" id="direccion"></td>
                </tr>
                <tr>
                    <td>Contacto:</td>
                    <td><input type="text" name="contacto" id="contacto"></td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="usuario" id="usuario"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="contraseña" id="contraseña"></td>
                </tr>
                <tr>
                    <td>Confirmar Contraseña: </td>
                    <td><input type="Password" name="cContraseña" id="cContraseña"></td>
                </tr>
            </table>
            <br> <br>
            <input type="submit" name="submit" value="Registrarse">
            <br><br><br>
            ¿Tienes cuenta? Click aqui
            <input type="button" value="Login" onclick="enviarLogin()" id="btLogin">
        </form>
        
        <div class="restore"></div>
    </main>
    <script src="../JS/managerLogReg.js"></script>
</body>
</html>