<?php

$id = $_GET['id'];

try {
    // $conexion = new PDO('mysql:host=localhost;dbname=prueba_php_full', 'root', '1234');
    $conexion = new PDO('pgsql:host=localhost;dbname=prueba_php_full', 'postgres', '1113645020');
    // echo "Ok";

    // Metodo query
    // $resultado = $conexion->query('SELECT * FROM usuario');
    // foreach ($resultado as $fila) {
    //     echo $fila['id'] . ' - ' . $fila['nombre'] . '<br />';
    // }

    //consultas preparadas prepared $tatements

    $statement = $conexion->prepare('SELECT * FROM usuario');
    $statement->execute();

    $resultado = $statement->fetchAll();
    foreach($resultado as $usuario) {
        echo $usuario['nombre'] . '<br>';
    }
    
    // $resultado = $statement->fetch();
    // echo "<pre>";
    // print_r($resultado);
    // echo "</pre>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>