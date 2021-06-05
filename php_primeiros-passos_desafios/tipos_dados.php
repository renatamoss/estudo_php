<?php

/*PHP possui tipos de dados como integer, double, string ou boolean (tipos primitivos)
PHP descobre os tipos de variáveis dinamicamente (tipagem dinâmica)
Utilizando gettype conseguimos descobrir o tipo de uma variável */

$idade = 21;
$salario = 1000.30; 
$divisao = 10 / 3;
$texto = 'Olá mundo';
$verdadeiro = true;
$falso = false;

echo gettype($falso) ;