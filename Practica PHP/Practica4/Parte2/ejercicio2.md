
## Ejercicio 2:
### En cada caso, indicar las salidas correspondientes:
a)
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12]; 
?>
?>
```
Salida: bar 1 (true se convierte en 1 al imprimirse)
b)
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; 
echo $matriz["unamatriz"][13]; 
echo $matriz["unamatriz"]["a"];
?>
```
 Salida: 5 9 42

c)
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56; 
$matriz["x"] = 42; 
unset($matriz[5]); 
unset($matriz);
?>
```

Salida: No se muestra ninguna salida porque no se imprime nada. \
 Sin embargo, se realizan las siguientes operaciones:

Se crea un array con claves numéricas y valores correspondientes. \
Se agrega el valor 56 al final del array \
Se agrega una clave "x" con el valor 42 al array. \
Se elimina la entrada con clave 5 utilizando unset(). \
Finalmente, se utiliza unset() para eliminar el array completo.