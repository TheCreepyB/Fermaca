<?php
$conect=mysqli_connect("localhost", "root","","productos") or die("no se ha podido connectar...");

$resultado = mysqli_query($conect, "SELECT * FROM categoria");
$sql="SELECT * FROM categoria";
$result = mysqli_query($conect,$sql);


echo"<p class='mt-3 float-left'>Despartamentos:</p> 
<button class='btn btn-secondary dropdown-toggle m-3' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Apartados</button>
<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
while ($row=mysqli_fetch_array($result)) {
    $id = $row['id'];
    $nombre = $row['nombre'];
echo "<a class='dropdown-item' href='catalogo.php?id=$id'>$nombre</a>";

}echo"</div>";
mysqli_free_result($result);

/**/
$idCategoria = $_GET["id"];


$conect=mysqli_connect("localhost", "root","","productos") or die("no se ha podido connectar...");

$resultado = mysqli_query($conect, "SELECT * FROM producto");
$sql="SELECT * FROM productos WHERE idCategoria = $idCategoria";
$result = mysqli_query($conect,$sql);




if($idCategoria != 0){
    echo "<table width= '80%' align='center' border=2 left='20%'>";

    echo "<tr>
    <th width='60%' align='center' bgcolor='ffff00'>Descripcion</th>
    <th width='20%' align='center' bgcolor='ffff00'>Marca</th>
    <th width='20%' align='center' bgcolor='ffff00'>Precio</th>
    <th width='10%' align='center' bgcolor='ffff00'>Existencia</th>
    </tr>";
    $row=mysqli_fetch_array($result, MYSQLI_NUM);
    $count = 20;
    if((!isset($_SESSION['usuario']))){
        while ((($row=mysqli_fetch_array($result)) && ($count > 0)) && ($row['idCategoria'] = $idCategoria)) {
            $count = $count - 1;
            $descripcion = $row['descripcion'];
            $marca = $row['marca'];
            $precio = $row['precio'];
            $existencia = $row['existencia'];
            $p = $row['idCategoria'];
        
        echo "<tr><td>$descripcion</td>
        <td align='center'>$marca</td>
        <td align='center'>$precio</td>
        <td align='center'>$existencia</td> 
        </tr>"
        ;
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
        while ($row=mysqli_fetch_array($result) && ($row['idCategoria'] = $idCategoria))   {
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