<?php
$meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'Agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>

<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '<li/>';
        }
        ?>
    </ul>
</body>

</html>