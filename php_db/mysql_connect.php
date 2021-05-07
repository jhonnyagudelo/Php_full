<?php

$enlace =  mysql_connect('localhost', 'root', '1234')or die('No se puedo conectar');

mysql_select_db('prueba_php_full', $conexion);

$resultado = mysql_query('SELECT * FROM usuario');

$fila = mysql_fetch_object($resultado);

echo $fila->nombre;

?>