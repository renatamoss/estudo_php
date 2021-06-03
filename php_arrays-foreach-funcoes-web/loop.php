<?php

// Array:
// usa-se [] ou array() para declarar um novo array
// possui um índice que por padrão começa com 0 (zero)
// para acessar todos os elementos podemos usar uma estrutura de repetição
// para saber quantos elementos um array tem existe a função count()

$idadeList = [21, 23, 19, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
