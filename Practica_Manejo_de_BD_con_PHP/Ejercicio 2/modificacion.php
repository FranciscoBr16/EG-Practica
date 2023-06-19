<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
</head>
<body>
    <?php
    include_once("conexiones.php");

    $vCiudad=$_POST['ciudad'];
    $vpais=$_POST['pais'];
    $vhabitantes=$_POST['habitantes'];
    $vSuperficie=$_POST['superficie'];
    $vtieneMetro =isset($_POST['tienemetro'])?1:0;
    $vSql = "UPDATE ciudades SET ciudad='$vCiudad', pais='$vpais', habitantes='$vhabitantes', superficie = '$vSuperficie', tienemetro='$vtieneMetro' WHERE ciudad='$vCiudad'";
    mysqli_query($link,$vSql) or die(mysqli_error($link));
    echo("La ciudad fue modificada<br>");
    echo("<a href='index.php'>volver a la pagina principal</a>");
    mysqli_close($link);
    ?>
</body>
</html>