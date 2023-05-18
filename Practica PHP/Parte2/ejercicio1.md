
## Ejercicio 1: 
### Indicar si los siguientes códigos son equivalentes.
```php
<?php
$a = array( 'color' => 'rojo',
 'sabor' => 'dulce',
 'forma' => 'redonda',
 'nombre' => 'manzana',
 4 
 );
?>
```
```php
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?> 
```

Los dos códigos proporcionados son equivalentes. Ambos códigos crean un array con las mismas claves y valores.

El primer código utiliza la sintaxis de declaración de array utilizando la función array(), donde se especifican las claves y los valores correspondientes. El último elemento del array, 4, se inserta automáticamente en la ultima posicion sin especificar una clave.

El segundo código utiliza la sintaxis de asignación de array, donde se asignan los valores directamente a las claves del array. Al igual que en el primer código, el último elemento, 4, se agrega automáticamente sin especificar una clave.