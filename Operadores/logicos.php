<?php

//En la mayoría de sus usos se necesitan al menos dos afirmaciones y un operador
//"Los michis son felinos (y) tienen 4 patas" (y) es el operador lógico

/*
(And &&) Se usa para verificar si dos afirmaciones son ciertas.
Si ambas son ciertas entonces la oración completa es cierta.
Si una de ellas es falsa, la oración completa es falsa.

(Or ||) Verifica si al menos una de las dos es cierta, entonces el resultado será cierto

(Not !) Se usa para invertir el valor de una afirmación.
*/

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

//And

var_dump($michis_felinos && $michis_4_patas);

//Or

var_dump($michis_vuelan || $michis_4_patas);

//Not

var_dump(!$michis_felinos);