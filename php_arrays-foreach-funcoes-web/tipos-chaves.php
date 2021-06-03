<?php

// um array associativo sempre define elementos composto por uma chave e um valor
// a associação entre chave e valor é feito com =>
// a chave funciona como um índice explicito (definido por nós)
// o valor pode ser um valor primitivo ou outro array
// a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
// um array associativo também é chamado de mapa ou dicionário
// podemos combinar um array simples e array associativo para definir estruturas mais complexas

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}