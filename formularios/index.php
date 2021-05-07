<?php
if ($_POST) {
     echo $nombre = $_POST['nombre'];
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
    <!-- TRAER LA RUTA ACTUAL DEL ARCHIVO QUE SE EJECUTA -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="">
    <!-- <form action="recibe.php" method="get" name=""> -->
        <input type="text" name="nombre" placeholder="Nombre" id="">
        
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        
        <select name="year" id="">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>

        <label for="terminos">¿Acepta los terminos?</label>
        <input type="checkbox" name="terminos" id="" value="ok">

        <input type="submit" value="Enviar" class="btn">
    </form>
</body>
</html>