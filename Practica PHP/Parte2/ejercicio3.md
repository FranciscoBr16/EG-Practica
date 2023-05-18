
## Ejercicio 3:
### En cada caso, indicar las salidas correspondientes:
a)
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
Salida: Se mostrará la fecha y hora actual
\
\
b)
```php
<?php
function sumar($sumando1,$sumando2){ 
 $suma=$sumando1+$sumando2; 
 echo $sumando1."+".$sumando2."=".$suma; 
} 
sumar(5,6);
?>
```
 Salida: 5+6=11

