<?php

use Alura\Banco\Modelo\Funcionario\CEO;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Engenheiro;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;

require_once 'autoload.php';

$autenticador = new Autenticador();
$viceCeo = new CEO(
    'Samuel Marques',
    new CPF('777.999.888-00'),
    8000
);

$autenticador->tentaLogin($viceCeo, '1234');

$novoEngenheiro = new Engenheiro(
    'Sara Marques',
    new CPF('777.999.888-11'),
    9000
);

$autenticador->tentaLogin($novoEngenheiro, '4321');

$novoTitular = new Titular(
    new CPF('777.999.888-11'),
    'Renata Marques',
    new Endereco('Cidade', 'Bairro', 'Rua', '10')
);

$autenticador->tentaLogin($novoTitular, '0000'); //senha correta '6789'
