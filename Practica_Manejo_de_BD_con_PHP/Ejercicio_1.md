## Practica 6 Manejo de Bases de Datos con PHP

## Ejercicio 1:

### Completar:

#### Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:

mysqli_connect()

#### Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

el nombre del servidor de base de datos (DB_HOST), el nombre de usuario (DB_USER) y la contraseña (DB_PASS).

#### Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función:

mysqli_select_db()

#### Esta función debe pasar como parámetro:

el nombre de la base de datos que se desea seleccionar. Por ejemplo:

mysqli_select_db($nombre_conexion, "nombre_base_datos");

#### La función mysqli_query () se utiliza para:

Esta función nos permite ejecutar una consulta a la base de datos que especifiquemos.
La sintaxis es:
$result = mysqli_query($nombreConexion,"Consulta aquí"); ó
mysqli_query($nombreConexion, $query);

#### y requiere como parámetros:

En el ejemplo anterior "Consulta aquí" se refiere a una consulta realizada utilizando el lenguaje SQL de consultas a bases de datos.
El nombre de conexión será aquel que hayamos obtenido previamente con la función mysqli_connect.

#### La cláusula or die() se utiliza para:

Manejar errores en la ejecución de consultas SQL u otras operaciones en PHP. Se coloca al final de una línea de código después de la función que se espera que se ejecute correctamente. Si ocurre un error durante la ejecución de esa función, la cláusula or die() interrumpe la ejecución del programa y muestra un mensaje de error personalizado, indicando la causa del error. Esto ayuda a identificar y solucionar problemas en el código.

#### y la función mysqli_error () se puede usar para:

Devolber el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado. Tiene como parametro $link que es un identificador de enlace devuelto por mysqli_connect(). Esta funcion devuelve una cadena que describe el error o una cadena vacía si no ha ocurrido error alguno

#### Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):

```php
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2']); ?></td>
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
```

Las primeras lineas del codigo acceden y muestran los valores en la posicion 0 , 1 , 2 del arreglo $fila. Las ultimas liberarán toda la memoria asociada con el identificador del resultado y se cerrara la conexión con la base de datos anteriormente abierta.
