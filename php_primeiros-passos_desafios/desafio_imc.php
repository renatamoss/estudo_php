<?php

$peso = 65;
$altura = 1.60;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Baseado no cálculo do seu IMC: $imc, você está com magreza excessiva.";
} else if ($imc > 18.5 && $imc < 24.9) {
    echo "Baseado no cálculo do IMC: $imc, seu peso está normal.";
} else if ($imc > 25 && $imc < 29.9) {
    echo "Baseado no cálculo do IMC: $imc, você está com sobrepeso.";
} else if ($imc > 30) {
    echo "Baseado no cálculo do IMC: $imc, você está com obesidade.";
}
