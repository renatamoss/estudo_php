<?php

use Alura\Banco\Modelo\Conta\{ContPoupanca, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca (
    new Titular(
        new CPF('123.456.789-66'),
        'Renata Marques',
        new Endereco('Jardins', 'De cima', 'Rua das Flores', '123')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();


