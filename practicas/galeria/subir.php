<?php 
require 'funciones.php';
$conexion = conexion('prueba_php_full', 'root', '1234');
$error = '';
if(!$conexion){
    // header('Location: error.php');
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    //getimagesize --- que es imagen
    $check = @getimagesize($_FILES['imagen']['tmp_name']);
    if($check !== false) {
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['imagen']['name'];
        // echo $archivo_subido;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);

        $statement = $conexion->prepare('
            INSERT INTO articulo (titulo, imagen, descripcion) 
                VALUES (:titulo, :imagen, :descripcion)
        ');

        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' =>  $_FILES['imagen']['name'],
            ':descripcion' => $_POST['descripcion']
        ));

        header('Location:index.php');

    }else {
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
}



require 'views/subir.view.php';