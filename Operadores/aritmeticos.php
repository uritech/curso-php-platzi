<?php

//Son los operadores que nos ayudan a hacer operaciones matemáticas

/*
(+)Adición - Suma dos o más números
(-)Sustracción - Resta dos o más números
(*)Multiplicación - Multiplica dos o más números
(/)División - Divide dos o más ńumeros 
(%)Módulo - Devuelve el residuo de una división
(**)Potenciación - eleva un número al exponente dado
(+$a)Identidad - Convierte un string a int o float, según sea el caso
(-$a)Negación - Convierte un número positivo a negativo
*/


$resultado = 5 % 3;
var_dump( $resultado );
echo (5 * 6). " " . (80 / 4);
echo "\n";

$segundos = 7503;
$hora_segundo = 3600;
echo "$segundos segundos convertidos a horas son " . (int)($segundos / $hora_segundo) . "\n";
echo "Sobran " . ($segundos % $hora_segundo) . " segundos.\n";