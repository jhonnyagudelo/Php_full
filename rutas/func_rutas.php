<?php 

// echo pathinfo('../archivos/documento.txt', PATHINFO_EXTENSION);

// $resultado = glob('*.php');
// print_r($resultado);

//varias extenciones
// $resultado = glob('*.{jpg,png}',GLOB_BRACE);
// print_r($resultado);


// $resultado = glob('../POO/*.{php}',GLOB_BRACE);
// print_r($resultado);

//traer un archivo sin toda la ruta
// echo basename('../POO/clases.php', '.php');

// traer el nombre de las carpetas
echo dirname('../POO/clases.php');