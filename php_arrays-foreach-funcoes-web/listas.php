<?php

// arrays podem crescer e podemos adicionar novos elementos
// em arrays simples, com índice numérico, basta usar [] 
// para adicionar um elemento no final (por exemplo, $lista[] = 12;)
// nesse caso o PHP automaticamente incrementa o índice

//função list(..): pega vários elementos de uma vez.

// $idadeList = array(21, 23, 19, 30, 41, 18); ou

$idadeList = [21, 23, 19, 30, 41, 18];

//nomeando variáveis para os itens da lista:
list($idadeRenata, $idadeSamuel, $idadeSara) = $idadeList; 

$idadeList[] = 20;
$idadePosicaoIndice = $idadeList[6];
echo $idadePosicaoIndice; 






