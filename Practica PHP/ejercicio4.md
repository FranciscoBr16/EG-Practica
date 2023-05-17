
## Ejercicio 4: 
### Si el archivo datos.php contiene el código que sigue:
``` php
<?php
$color = 'blanco';
$flor = 'clavel';
?>
```
### Indicar las salidas que produce el siguiente código. Justificar.
``` php
<?php
echo "El $flor $color \n"; 
include 'datos.php';
echo " El $flor $color"; 
?>
```
#### Salida: 
Se mostraran dos mensajes de error al ejecutarse el primer echo, ya que las variables no tienen valores luego cuando se inclute el archvo 'datos.php' la salida sera: El clavel blanco.