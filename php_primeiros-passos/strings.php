<?php

/* PHP_EOL ("end of line"): tem o valor do caractere especial de 
quebra de linha do sistema operacional em que é executado.
Nova linha: \n ou \r
Tab: \t 
Para concatenar uma string com uma outra variável usamos o . (ponto)
Podemos definir uma string com aspas simples(') ou duplas(")
Para interpretar um valor da variável ou caractere especial dentro 
da string devemos usar aspas duplas*/

$idade = 30;

echo "Olá Mundo!" . PHP_EOL; 
echo "\n"; 
echo "\t"; 
echo "Minha idade é $idade anos.";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar se tiver mais de 18 anos. \n";

echo "Você tem $idade anos. Pode entrar.";