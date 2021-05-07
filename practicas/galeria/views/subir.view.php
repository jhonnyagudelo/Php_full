<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>subir foto</title>
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <!-- inr a la misma pagina -->
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
            <label for="imagen">Selecciona tu foto</label>
            <input type="file" name="imagen" id="imagen">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion" placeholder="Ingresa una descripcion"></textarea>

            <input type="submit" class="submit" value="subir foto">
            
            <?php if(isset($error)): ?>
                <p class="eror"> <?php echo $error; ?></p>
            <?php endif ?>

        </form>
    </div>
    <footer class="footer">
        <p class="copyright">Galeria de imagenes</p>
    </footer>
</body>

</html>