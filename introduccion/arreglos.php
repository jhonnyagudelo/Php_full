<?php

namespace App;

$semana = ['Lunes', 'Martes', 'Miercoles', 'Juves', 'Viernes', 'Sabado', 'Domingo'];
$semana[7] = 'jhonny';

echo $semana[2] .'<br/>';

//Arreglos asociativos

$jhonny = [
    'telefono' => '3127470718',
    'edad' => 25,
    'apellido' => 'agudelo'
];

echo 'El telefono de jhonny es: ' .$jhonny['telefono']  .'<br/>';


// arreglos multidimencionales

$amigos =[
    ['alejandro',20],
    ['william',20],
    ['esperanza',20],
];

echo 'El nombre de mi hermono es: '.$amigos[0][0] .'y su edad es ' .$amigos[0][1] .'<br/>';

// contar elementos de los arreglos
$meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'Agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
$ultimo_mes = count($meses)-1;

echo $meses[$ultimo_mes];


