<?php
$idCategoria = $_GET["id"];

$conect=mysqli_connect("localhost", "root","","productos") or die("no se ha podido connectar...");

$resultado = mysqli_query($conect, "SELECT * FROM producto");
$sql="SELECT * FROM productos";
$result = mysqli_query($conect,$sql);

echo "<table width= '80%' align='center' border=2 left='20%'>";

echo "<tr>
<th width='60%' align='center' bgcolor='ffff00'>Descripcion</th>
<th width='20%' align='center' bgcolor='ffff00'>Marca</th>
<th width='20%' align='center' bgcolor='ffff00'>Precio</th>
<th width='20%' align='center' bgcolor='ffff00'>Existencia</th>
</tr>";
$row=mysqli_fetch_array($result, MYSQLI_NUM);

$count = 20;
if((!isset($_SESSION['usuario'])) && $idCategoria != 0){
    while ((($row=mysqli_fetch_array($result)) && ($count > 0)) && ($row['idCategoria'] = $idCategoria)) {
        $count = $count - 1;
        $descripcion = $row['descripcion'];
        $marca = $row['marca'];
        $precio = $row['precio'];
        $existencia = $row['existencia'];
    
    echo "<tr><td>$descripcion</td>
    <td align='center'>$marca</td>
    <td align='center'>$precio</td>
    <td align='center'>$existencia</td> </tr>";
    } echo"</table>";
    echo "<div class='container'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 display-4'>
                <p class='text-center'>
                    Si desea ver el resto del catalogo inicie de sesion
                </p>
            </div>
        </div>
    </div>";
} else if($idCategoria != 0){
    while ($row=mysqli_fetch_array($result)) {
        $descripcion = $row['descripcion'];
        $marca = $row['marca'];
        $precio = $row['precio'];
        $existencia = $row['existencia'];
    
    echo "<tr><td>$descripcion</td>
    <td align='center'>$marca</td>
    <td align='center'>$precio</td>
    <td align='center'>$existencia</td> </tr> ";
    
    } echo"</table>";
}
/*
while ($row=mysqli_fetch_array($result)) {
    $descripcion = $row['descripcion'];
    $marca = $row['marca'];
    $precio = $row['precio'];
    $existencia = $row['existencia'];

echo "<tr><td>$descripcion</td>
<td align='center'>$marca</td>
<td align='center'>$precio</td>
<td align='center'>$existencia</td> </tr> ";

} echo"</table>";*/


mysqli_free_result($result);

?>
