<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="contenedor__title">Articulos</h1>
        <section class="contenedor__articulos">
            <ul>
                <?php foreach ($articulos as $articulo): ?>
                    <li> <?php echo $articulo['id']. ' - '. $articulo['nombre'] ?> </li>
                <?php endforeach; ?> 
            </ul>
        </section>
        <section class="contenedor__paginador">
        <ul>

 
            <?php if($pagina == 1): ?>
                <li class="disabled">&laquo;</li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
            <?php endif; ?>

                       <!-- Ejecutamos un ciclo para mostrar las pagnas  -->
            <?php 
                for ($i=1; $i <= $numeroPaginas ; $i++) { 
                    if ($pagina == $i) {
                        echo  "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
            ?>    


       <!-- Esalecemos cuando el boton de siguiente estara desabilidato -->

            <?php if($pagina == $numeroPaginas): ?>
                <li class="disabled">&raquo;</li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
            <?php endif; ?>
            </ul>
        </section>
    </div>
</body>
</html>