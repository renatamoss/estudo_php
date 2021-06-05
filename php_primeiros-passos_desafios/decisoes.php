<?php

/*operadores aplicados: && || and or
Operadores de comparação (<, >, ==, !=) 

TERNÁRIO:
$idade = 15;
$mensagem = $idade < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;
echo $mensagem;*/

$idade = 19;
$numeroDePessoas = 0;

echo "Você só pode entrar se tiver mais de 18 anos, ou a partir de 16 anos se estiver acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade e não está acompanhado, portanto, não pode entrar.";
    echo PHP_EOL . "É uma pena...";
}

echo PHP_EOL;
echo PHP_EOL;
echo 'Adeus!';
