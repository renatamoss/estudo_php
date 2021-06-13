<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

//associando um array ao outro:
$relacionados = array_combine($correntistas, $saldos);


//adicionando um novo item ao Array Associativo:
$relacionados["Renata"] = 10000;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";


//se item do array não existir:
if (array_key_exists("Joao", $relacionados)) {
    echo "O saldo do Joao é: {$relacionados["Joao"]}";
} else {
    echo "Não foi encontrado";
}

