<?php

// Existem algumas variações de laços, dentre elas:
// while que possui uma condição de entrada
// do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)
// for que possui a declaração de uma variável, uma condição entrada e o increment
// Dentro do bloco do laço podemos pular uma interação com o comando continue
// Com o comando break podemos sair do laço
// A variável contador normalmente se chama i


$contador = 1;
while ( $contador <= 15 ) {
   echo $contador . PHP_EOL;
   $contador = $contador + 1;
}

for ($contador = 1; $contador <= 15; $contador++) {
   if ($contador == 13) {
      break; // ou continue : ele pula para próxima condição.
   } 
      echo $contador . PHP_EOL;
}