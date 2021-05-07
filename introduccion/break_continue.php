<?php

$paises = ['Mexico', 'Colombia', 'Peru', 'Chile', 'España'];

foreach ($paises as $pais) {
    if ($pais == 'Peru') {
        continue;
    }
    echo $pais . '<br/>';
}
