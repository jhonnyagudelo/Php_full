<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="css/style.css">
    <title>Registrate</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="contenedor__titulo">Registrate</h1>
        <hr class="contenedor__border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="nombre" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password__btn" placeholder="password">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <?php if (!empty($errores)) : ?>
            <div class="error">
                <ul>
                    <?php echo $errores;  ?>
                </ul>
            </div>
            <?php endif; ?>
        </form>
        <p class="texto-registrate">
            ¿Aun no tienes cuenta?
            <a href="registrate.php">Registrate</a>
        </p>
    </div>
</body>

</html>