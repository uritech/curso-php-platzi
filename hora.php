<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = ($segundos % 3600);
$minutos = (int)($segundos / 60);
$segundos = ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos \n";