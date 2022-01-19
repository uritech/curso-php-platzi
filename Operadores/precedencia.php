<?php

/*
En pocas palabras, nos dicen qué operación pasará primero y qué operación pasará después
¿Primero suma y luego asigna? ¿Primero asigna y luego suma?

Primero asigna y después suma.

Tiene que ver con la asociatividad, puedes ser izquierda o derecha.
*/

$contador = 1;
$resultado = ++$contador;

var_dump($resultado);

$michis_4_patas = true;
$michis_programan = false;

// Forzamos que se realice la operación antes de la asinación por medio de paréntesis ()
$comparacion = ($michis_4_patas and $michis_programan); 

var_dump($comparacion);
