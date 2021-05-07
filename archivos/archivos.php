<?php

// if(file_exists('documento.txt')) {
//     echo "archivo si existe";
// }else {
//     echo "archivo no existe";
// }


//leer archivos
// echo file_get_contents('documento.txt');

//AGREGAR INFORMACION AL DOCUMENTO
// file_put_contents('documento.txt', "hola mundo \n",FILE_APPEND);

// file_put_contents('documento.txt', '');

// for ($i=1; $i <=10 ; $i++) { 
//     file_put_contents('documento.txt', "$i \n", FILE_APPEND);
// }


//convertir un archivo en un array
$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);