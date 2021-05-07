<?php

$jhonny = [
    'telefono' => '3127470718',
    'edad' => 25,
    'apellido' => 'agudelo'
];
//nos permite extraer los indices como variables
// extract($jhonny);

// echo $telefono;

//nos permite extraer el ultimo elemento al final de un arreglo
$semana = ['Lunes', 'Martes', 'Miercoles', 'Juves', 'Viernes', 'Sabado', 'Domingo'];

// $ultimo_dia = array_pop($semana);
// foreach ($semana as $dia) {
//     echo $dia. '<br/>';
// }

// recibe como segundo parametro nuestro arreglo, y nos separa con el elemento que se le antepone

// echo join(' - ', $semana);

//nos permite conocer cuantos elementos tiene nuestro arreglo
// echo count($semana);

// mostrar el arreglo en orden acendente
// sort($semana);
// echo join(', ', $semana);

// invierte los dias en forma alfabetica
// rsort($semana);
// echo join(', ', $semana);

$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);