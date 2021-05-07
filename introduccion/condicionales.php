<?php

/*Operadores logicos

&& Evalua que se cumpla las condiciones
||, OR una de las condiciones de cumpla
xor evalua que se cumpla una y solo una condiciones 

*/
// iseet: es para saber si alguna variable tiene valor o no 

    $edad;
    // $rol = "administrador";
    // $retVal = (isset ($edad) >= 18 && $rol = "administrador") ? '<h1>Entrar</h1>' :' <h1>Suerte vuelve despues de los 18</h1>' ;
    // echo $retVal;



$edad = (isset($edad) ? $edad : $edad ='El usuario no establecio su eda');

echo 'Edad'. ' ' .$edad;