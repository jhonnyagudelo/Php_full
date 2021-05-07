<?php

// print_r($_POST); +
// if (!$_POST) {
//     header('location: http://localhost/PHP_full/formularios/');
// } else {
//     $nombre = $_POST['nombre'];
//     $sexo = $_POST['sexo'];
//     $year = $_POST['year'];
//     $terminos = $_POST['terminos'];
    
//     echo 'Hola, ' . $nombre . ' eres ' . $sexo; 
// }


print_r($_GET); 

    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $year = $_GET['year'];
    $terminos = $_GET['terminos'];
?>