<html>

<head>
  <title>Nueva ciudad</title>
</head>

<body>

  <?php
include_once('conexiones.php');

$vciudad = $_POST['ciudad'];
$vpais = $_POST['pais'];
$vhabitantes = $_POST['habitantes'];
$vsuperficie = $_POST['superficie'];
$vtieneMetro =isset($_POST['tienemetro']) ?1:0 ;
$sql_agregar = 'INSERT INTO ciudades (ciudad,pais,habitantes,superficie,tienemetro) values (?,?,?,?,?)';
$sentencia_agregar = $link-> prepare($sql_agregar);
$sentencia_agregar->execute(array($vciudad,$vpais,$vhabitantes,$vsuperficie,$vtieneMetro));


 echo("La ciudad fue añadida <br>");
 echo ("<a href='formularioAlta.html'> Ingresar otra ciudad</a><br>");
 
 echo("<a href='index.php'>Volver a pagina inicial</a>");

mysqli_close($link);
?>

</body>

</html>