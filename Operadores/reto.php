<?php

//Suponiendo estas variables

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//Cuál es el resultado?
var_dump($es_un_michi_grande && $le_gusta_comer); //True
var_dump($es_un_michi_grande || $sabe_volar); //True
var_dump($sabe_volar || $tiene_2_patas);//False
var_dump(!$le_gusta_comer); //False
var_dump(!$le_gusta_comer || $es_un_michi_grande); //True