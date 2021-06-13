<?php

namespace Alura;

require 'Media.php';

$notas = [9, 6, 10, 8, 4];

$media = new Media();
$mediaNotas = $media->calculaMedia($notas);

if ($media) {
    echo "<p> A média é $mediaNotas.</p>";
} else {
    echo "<p> Não foi possível calcular a média.";
}

