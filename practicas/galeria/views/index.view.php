<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Galeria</title>
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <h1 class="titulo">Mi increible galeria en php y mySQL</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="paginacion">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-arrow-left"></i> Pagina anterios </a>
                <?php endif ?>

                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1 ?>" class="derecha">Pagina Siguiente <i class="fa fa-arrow-right"></i> </a>
                <?php endif ?>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p class="copyright">Galeria de imagenes</p>
    </footer>
</body>

</html>