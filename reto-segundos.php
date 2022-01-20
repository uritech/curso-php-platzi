<?php

$horas = readline("Ingresa las horas :");
$minutos = readline ("Ingresa los minutos :");
$segundos = readline ("Ingresa los segundos :");

$resultado = ($horas * 3600) + ($minutos * 60) + $segundos;

echo "Son $resultado segundos. \n";