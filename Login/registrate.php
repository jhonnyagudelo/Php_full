<?php

session_start();


if (isset($_SESSION['nombre'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    // echo "$usuario . .$email . $password . $password2";

    $errores = "";

    if (empty($usuario) || empty($password) || empty($password2) || empty($email)) {
        $errores .= '<li>Por favor rellana  los datos correctamente </li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=prueba_php_full', 'root', '1234');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement =  $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre LIMIT 1');
        $statement->execute(array(':nombre' => $usuario));
        $resultado = $statement->fetch();

        // var_dump($resultado);

        if ($resultado != false) {
            $errores .= '<i>El nombre de usuario ya existe</i>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }

    if($errores == '') {
        $statement = $conexion->prepare('INSERT INTO usuario (nombre, email, password) VALUES (:nombre, :email, :password)');
        $statement->execute(array(
                ':nombre' => $usuario, 
                ':email' => $email,
                ':password' => $password)
        );
        header('Location:login.php');
        // echo 'hola mundo';
    }

}


require 'views/registrate.view.php';
