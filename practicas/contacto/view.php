<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>

<body>
    <div class="wrap">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" id="correo" class="form-control" name="correo" placeholder="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

            <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control"></textarea>

            <?php if (!empty($errores)):  ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">

        </form>
    </div>
</body>

</html>