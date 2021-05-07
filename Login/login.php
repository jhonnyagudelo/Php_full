<?php
session_start();

if (isset($_SESSION['nombre'])) {
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario  = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    //   echo "$usuario -- $password"

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_php_full', 'root', '1234');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre AND password = :password');
    $statement->execute(array(
        ':nombre' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();

    if ($resultado !== false) {
        $_SESSION['nombre'] = $usuario;
        header('Location:index.php');

    } else {
        $errores .= '<li> Datos incorrectos </li>';
    }
}



require 'views/login.view.php';
