<?php

$meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'Agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

for ($i = 0; $i < count($meses); $i++) {
    echo $meses[$i] . '<br/>';
}

$contador = 0;

while ($contador < count($meses)) {
    echo $meses[$contador] . '<br/>';
    $contador++;
}

//cicloDoWhilwe

$i = 0;
do {
    echo $i . '<br/>';
    $i++;
} while ($i <= 10);

// ciclo ForEach
$jhonny = [
    'telefono' => '3127470718',
    'edad' => 25,
    'apellido' => 'agudelo'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>

<body>
    <h1>Datos persona</h1>
    <ul>
        <?php
        foreach ($jhonny as $dato => $valor) {
            echo '<li>' . $dato . ": " . $valor . '<li/>';
        }

        ?>
    </ul>
</body>

</html>