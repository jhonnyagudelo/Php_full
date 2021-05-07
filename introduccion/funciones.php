<?php

/**Funciones
 * count()
 * sort()
 * rsort()
 * var_dumb()
 * print_r()
 */

 $num1 = 10;
 $num2 = 5;

 function restar($num1, $num2){
    $result = $num1 - $num2; 
     return $result;
 };

 $result = restar(5 ,10);

//  echo $result;


 function calTriangulo($base, $altura) {
     $result = ($base * $altura) / 2;
     return $result;
 }

 $calculo = calTriangulo(10, 10);

 echo  'Eltrianfulo tiene un area de ' .$calculo . ' mtrs';
