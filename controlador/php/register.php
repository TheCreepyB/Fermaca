<?php
$RIF = $_POST['RIF'];
$usuario = $_POST['usuario'];
$contras = $_POST['contraseña'];
$razonSocial = $_POST['razonSocial'];
$direccion = $_POST['direccion'];
$contacto = $_POST['contacto'];

if($RIF && $usuario && $contras && $razonSocial && $direccion && $contacto){
    $conect=mysqli_connect("localhost", "root","", "productos") or die("no se ha podido connectar...");
    $sql="INSERT INTO cliente (RIF,usuario,contras,razonSocial,direccion,contacto)VALUES('$RIF','$usuario','$contras','$razonSocial','$direccion','$contacto')";
    if ($conect->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conect->error;
    }
    $registro = mysqli_affected_rows($conect);
    $conect->close();
    header("Location: ../../logOut.php");
    header("Location: ../../../../../FermacaRework/modelo/HTML/login.php");
}
?>