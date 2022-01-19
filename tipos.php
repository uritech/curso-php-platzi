<?php

$numerito = "23";

/*
PHP es capaz de modificar en tiempo de ejecución el tipo de dato de una variable,
sin modificar su tipo de dato original.
Ejemplo si queremos sumar el contenido de nuestra variable $numerito que es un string "23" 
con 2 que es un integer,
nos mostrará el resultado de 25 integer, pero si consultamos con var_dump el tipo de dato que tiene $numerito
nos mostrará que es un string, 
demostrando que no se modifica el tipo de dato original de nuestra variable.

Este comportamiento sucederá con cualquier tipo de dato.
*/

$nuevo_numerito = $numerito + 2;

//Nos mostrará el tipo de dato que es nuestra variable
var_dump($numerito);

echo "\n";

//Realiza la operación pero nos muestra un warning.
$papas = "10 papas en el costal";
$total_papas = $papas + 5;

var_dump($total_papas);
echo "\n";