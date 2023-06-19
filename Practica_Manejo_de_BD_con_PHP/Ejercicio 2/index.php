<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado completo de ciudades</title>
</head>
<body>
<a href="formuAlta.html"><h3>Ingresar una nueva ciudad</h3> </a>
<a href="formBaja.html"><h3>Eliminar ciudad</h3> </a> 
<a href="formModificacion.html"><h3>Modificar ciudad</h3> </a> 


<?php
include_once("conexiones.php");

$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros = mysqli_num_rows($vResultado);
?>    

<table border="1">
<tr>
    <th>Id</b></th>
    <th>ciudad</></th>
    <th>Pais</b></th>
    <th>Habitantes</b></th>
    <th>Superficie</th>
    <th>Tiene metro?</th>
</tr>
<?php
while($fila = mysqli_fetch_array($vResultado))
{
    // se debe respetar el nombre que lleva en la tabla de la base de datos
    echo '<tr>';
    echo '<td>'.$fila['id'].'</td>';
    echo '<td>'.$fila['ciudad'].'</td>';
    echo '<td>'.$fila['pais'].'</td>';
    echo '<td>'.$fila['habitantes'].'</td>';
    echo '<td>'.$fila['superficie'].'</td>';
    echo '<td>'.$fila['tieneMetro'].'</td>';
    echo '</tr>';
}
mysqli_close($link);
?>

</table>

</body>
</html>