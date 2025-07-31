<div class="col-md-8">
    <?php
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        include('controlador/php/register.php');
    ?>
    <form method="POST" action="controlador/php/register.php">
        <table border=0>
            <tr>
                <td>Cedula:</td>
                <td class="pt-2"><input type="text" name="RIF" id="RIF" ></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td class="pt-2"><input type="text" name="razonSocial" id="razonSocial"></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td class="pt-2"><input type="text" name="direccion" id="direccion"></td>
            </tr>
            <tr>
                <td>Numero telefonico:</td>
                <td class="pt-2"><input type="text" name="contacto" id="contacto"></td>
            </tr>
            <tr>
                <td>Usuario:</td>
                <td class="pt-2"><input type="text" name="usuario" id="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td class="pt-2"><input type="password" name="contraseña" id="contraseña"></td>
            </tr>
        </table>
        <br>
        <div class="row justify-content-md-end justify-content-sm-center ">
            <input type="submit" class="" name="submit" value="Registrarse">
        </div>
    </form>
</div>