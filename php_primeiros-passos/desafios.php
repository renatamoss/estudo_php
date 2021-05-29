<?php

//Imprima no console os números ímpares de 1 a 100
for ($i = 1; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}

//Exibir a tabuada do multiplicador
$multiplicador = 9;

for ($t = 1; $t <= 10; $t++) {
    echo "$multiplicador X $t = " . $t * $multiplicador . PHP_EOL;
}

//calculo do imc
$peso = 70;
$altura = 1.70;
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
