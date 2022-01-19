<?php
//Son los operadores que nos ayudan a comparar dos o más valores. Devuelven un valor boolean (true or false)

$a = 5;
$b = "5";
$c = 8;
$d = 6;


//(==) Igual - es para comparar igualdad. No es de asignación. Sin importar el tipo de dato
var_dump($a == $b);

// (===) Idéntico - Compara que sean iguales incluyendo el tipo de dato.
var_dump($a === $b); 

// (!=) Diferente - Compara sin importar el tipo de dato
var_dump ($a != $b);

//(!==) Diferente - Compara tomando en cuenta el tipo de dato
var_dump($a !== $b);

// (<) Menor que
var_dump($a < $c);

// (>) Mayor que
var_dump($a > $d);

// (>=) Mayor o igual que
var_dump($a >= $b);

// (<=) Menor o igual que
var_dump($a >= $d);

// (<=>) Nave espacial - Devuelve -1 si el valor que está a la izquierda es menor que el de la derecha
//Si los dos son iguales devuelve 0
//Si el de la izquierda es mayor que el de la derecha devuelve 1;
var_dump(1 <=> 3);

// (??) Fusión de null - nos dice cual es la primer variable que está definida
//Utiliza la primera variable definida que encuentre.

$edad = 32;

echo $edadx ?? $edad;