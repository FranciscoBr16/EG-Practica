
# Ejercicio 2
### Indicar si los siguientes códigos son equivalentes
### a)
```php
<?php
$i = 1;
while ($i <= 10) {
 print $i++; 
}
?>
```
```php
<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
?>
```
```php
<?php
$i = 0;
do {
 print ++$i;
} while ($i<10);
?>
```
Los tres bloques de código en PHP son diferentes formas de lograr el mismo resultado,  imprimir en pantalla los números del 1 al 10. Sin embargo, cada bloque de código utiliza una estructura de control de flujo diferente. El primer bloque usa un while e imprime el valor de $i y luego incrementa su valor utilizando $i++. El segundo bloque hace lo mismo pero utilizando un while alternativo. El ultimo utiliza un do-while y primero incrementa el valor de $i y luego lo muestra.

### b)
```php
<?php
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
?>
```
```php
<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>
```
```php
<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>
```
```php
<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?>
```

Los cuatro bloques de código en PHP son diferentes formas de lograr el mismo resultado, imprimir en pantalla los números del 1 al 10 utilizando un bucle for. El primero es un for estandar, el segundo un for sin cuerpo, en el tercero en lugar de tener una expresión de condición en el bucle, la condición se verifica dentro del cuerpo del for utilizando un if en donde se ejecutara break si se cumple la condicion y se saldra del bucle, el ultimo es un bucle infinito que terminara una vez se cumpla la condicion del if .

### c)
```php
<?php
…
…
if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}
?>
```
```php
<?php
…
…
switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
?>
```

Los dos bloques de código en PHP son diferentes formas de evaluar una condicion basada en el valor de la variable $i con un if y elseif en el primero y un switch en el segundo