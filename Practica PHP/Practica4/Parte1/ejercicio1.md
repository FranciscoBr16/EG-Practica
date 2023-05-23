
# Ejercicio 1
## En el siguiente código identificar:
- las variables y su tipo
- los operadores
- las funciones y sus parámetros
- las estructuras de control
- cuál es la salida por pantalla

```php
 <?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 
```

#### Variables :
- a: boolean
- b: string
- c: string (Las comillas simples se interpretan literalmente)
- d: integer
- f: integer
- g: integer
#### Operadores:
- \* Multiplicacion
- ++ , += incremento
- = asignacion
#### Funciones y parametros:
- doble($i) es un a funcion creada por el usuario y tiene como parametro a "i"
- echo  es una función utilizada para imprimir contenido en la salida (generalmente en el navegador web)
- gettype es una función utilizada para obtener el tipo de dato de una variable
- is_int() verifica si el tipo de dato del parametro es entero, devuelve true si lo es, o false si no lo es.
#### Estructuras de control 
- if 
- ... ? ... : ... (operador ternario)
#### Salida en pantalla:
boolean string string integer 1 xyz xyz 18 44 44

