<?php

// o laço foreach oferece uma forma mais expressiva de iteração
// no foreach podemos acessar o índice e o valor do elemento da iteração
// com foreach posso alterar o indice para o cpf do titular

$constasCorrentes = [
    12345678910 =>  [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000            
    ],
    12345678912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//adicionando uma nova conta no array:
$constasCorrentes[45678912310] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($constasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
