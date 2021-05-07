<?php


function suma($num1, $num2) {
    return $num1 + $num2;
}

//include hace qe un archivo externo se agrege dentro del archivo que estamnos usando, si no se encuntra, encontces aparece un warnning
//require hace qe un archivo externo se agrege dentro del archivo que estamnos usando, si no se encuntra, encontces aparece un error
//require_once hace qe un archivo externo se agrege solo una vez independiente de las veces que lo agregue
//include_once hace qe un archivo externo se agrege solo una vez independiente de las veces que lo agregue


require 'vista.php';