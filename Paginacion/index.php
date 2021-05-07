<?php 

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_php_full', 'root', '1234');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die;
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 10;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) :0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM  articulos LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();
// print_r($articulos);
if(!$articulos) {
    header('Location:http://localhost/PHP_full/Paginacion/');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

// echo $totalArticulos;

$numeroPaginas = ceil($totalArticulos / $postPorPagina); 
echo $numeroPaginas;

require 'index.view.php';

