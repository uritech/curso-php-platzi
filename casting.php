<?php

//"Casting" es cuando forzamos que un tipo de dato se convierta en otro.

$numerito_string = "89";// Aqui lo definimos como un string
$numerito_int = (int)$numerito_string; //Forzamos el cambio a integer

var_dump($numerito_int);
echo "\n";

//0 o cualquier cosa que sea vacía es FALSE, pero cualquier valor ya sea número o string será TRUE
$flag = "1";

$flag = (bool) $flag;

var_dump ($flag);