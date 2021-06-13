<?php

namespace Alura;

require 'autoload.php';


$correntistas_e_compras = [
"Giovanni",
 12,
"Maria",
 25,
"Luis",
"Luísa",
"12"
];

 echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover("Giovanni", $correntistas_e_compras);

var_dump($correntistas_e_compras);

 echo "</pre>";

 //O PHP tenta converter os tipos de dados de uma variável quando encontra 
 //alguma incompatibilidade ao invés de dar erro.
 //O type juggling faz um casting automático e evita parar o programa e dar erro.

 //PORÉM: misturar elementos de tipos diferentes no array é uma má ideia. 
 //O PHP, por ser dinâmico, traz essa possibilidade, 
 //mas não se trata de uma boa prática.