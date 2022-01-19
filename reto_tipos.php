<?php

//Fácil
$nombre = "Carlos"; //String
$apellido = "Gómez"; //String
$edad = 18;//Integer
$aprobado = true; //Boolean

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //Float, las divisiones siempre serán un FLOAT
$nombre_completo = $nombre . " " . $apellido; //String
$presento_examen = (bool) 1; //Boolean

//Avanzado
$numero_preguntas = 5 + "5"; //Integer
$numero_respuestas = "5" + 5; //Integer
$promedio_maximo = $numero_respuestas / 1.0; //Float
$michis = 3 + "5 michis";//Integer Warning

var_dump ($nombre, $apellido, $edad, $aprobado, $promedio, 
$nombre_completo, $presento_examen,$numero_preguntas, $numero_respuestas,
$promedio_maximo, $michis);