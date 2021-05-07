<?php
session_start();
if ($_SESSION) {
     $nombre = $_SESSION['nombre'];
     echo "<h1>hola, $nombre</h1>";
}else{
    echo "no has iniciado sesion";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <p>Hola, <?php echo $_SESSION['nombre']; ?> </p> -->
   <a href="cerrar.php">Cerrar sesion</a>
</body>
</html>