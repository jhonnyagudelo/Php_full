<?php
$texto = 'hola carlos ';
// nos convierte el codigo  en archivos html, evita inyectar codigo
echo htmlspecialchars($texto);
// quita espacios en blanco
echo trim($texto);
//calcular el tamaño de una cadena de texto
echo strlen($texto);
//corte la pablada (desde donde corte hasta donde)
echo substr($texto, 0, 4);
//convertir todos los caracter en matuscula 
echo strtoupper($texto);
//convertir todos los caracter en minustula
echo strtolower($texto);
// nos permite saber en que pocision esta la letra
echo strpos($texto, 'h');


