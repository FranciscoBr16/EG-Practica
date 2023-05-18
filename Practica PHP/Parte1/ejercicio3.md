
# Ejercicio 3
### Explicar para qué se utiliza el siguiente código
### a)
``` html
<html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;
 $col = 2;
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>"; 
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";
 } echo "</tr>\n";
 }
 echo "</table>\n";
?>
</body></html>
```
El código se utiliza para generar una tabla HTML: \
Se utiliza la función echo para imprimir la etiqueta de apertura de una tabla HTML: <table width = 90% border = '1' >. Esta etiqueta define una tabla con un ancho del 90% y un borde de grosor 1. \
Se definen las variables $row y $col con los valores 5 y 2, respectivamente. Estas variables determinarán el número de filas y columnas de la tabla. \
Se utiliza un for anidado para generar las filas y columnas de la tabla. El bucle exterior itera sobre las filas, y el bucle interior itera sobre las columnas. \
En cada iteración del bucle interior, se utiliza echo para imprimir una celda (<td>) vacía en la tabla. \
Después de completar una fila, se cierra la etiqueta de la fila (</tr>) y se agrega un salto de línea (\n) para mejorar la legibilidad del código. \
Después de completar todas las filas y columnas, se imprime la etiqueta de cierre de la tabla (</table>) y se agrega un salto de línea.
### b)
``` html
<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
?>
</body></html>
```
El código muestra un formulario de entrada de edad y muestra si la persona es mayor o menor de edad en función de la edad ingresada: \
Se verifica si el botón de envío del formulario no ha sido presionado utilizando !isset($_POST['submit']). Esto significa que si el botón no ha sido presionado, se ejecuta el bloque de código dentro del if. \
Dentro del if, se muestra un formulario HTML utilizando la etiqueta <form>. El formulario tiene un atributo action que apunta a $_SERVER['PHP_SELF'], lo que significa que los datos del formulario se enviarán al mismo archivo PHP. El formulario tiene un campo de entrada de edad (<input name="age" size="2">) y un botón de envío (<input type="submit" name="submit" value="Ir">). \
Después de cerrar el formulario, se cierra el bloque de código PHP con ?>.\
Después del bloque else, se inicia otro bloque de código PHP con <?php. \
Si el botón de envío del formulario ha sido presionado, se accede al valor del campo de entrada de edad utilizando $_POST['age'] y se asigna a la variable $age. \
Luego, se realiza una verificación de la edad ingresada. Si la edad es mayor o igual a 21, se muestra el mensaje "Mayor de edad" utilizando echo. De lo contrario, se muestra el mensaje "Menor de edad".
