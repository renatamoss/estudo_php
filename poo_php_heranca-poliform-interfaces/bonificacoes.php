<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControleDeBonificacao;
use Alura\Banco\Modelo\Funcionario\{Funcionario, CEO, Engenheiro, Desenvolvedor, EditorVideo};

$umfuncionario = new CEO (
    'Diego Marques',
    new CPF('456.789.123-33'),
    20000
);

$outrofuncionario = new Engenheiro (
    'Poliana Santos',
    new CPF ('555.888.999-10'),
    12000
);

$terceirofuncionario = new Desenvolvedor (
    'Douglas Santos',
    new CPF('777.444.111-00'),
    10000
);

$umeditor = new EditorVideo(
    'Valeria Santos',
    new CPF ('888.999.666-55'),
    3000
);



$terceirofuncionario->sobeDeNivel();

$controlador = new ControleDeBonificacao();
$controlador->adicionaBonificacao($umfuncionario);
$controlador->adicionaBonificacao($outrofuncionario);
$controlador->adicionaBonificacao($terceirofuncionario);
$controlador->adicionaBonificacao($umeditor);

echo $controlador->recuperaTotalBonificacao();

