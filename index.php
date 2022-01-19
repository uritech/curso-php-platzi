<?php

//Esto es un comentario de una sola línea
/*Esto es un comentario
de tipo bloque,
podemos escribir el numero de lineas que queramos*/
echo "Hola, esto está programado en PHP \n";

$nombre = "Uriel";
$apellido = "Barranco";

echo "Yo me llamo " . $nombre . " " . $apellido . "\n";

/*Esta es otra forma de concatenar un string con variables
pero solo funciona con comillas dobles.*/
echo "Yo me llamo $nombre $apellido \n";

echo "El resultado de 4 x 5 es " . (4*5). "\n";