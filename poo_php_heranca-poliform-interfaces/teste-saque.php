<?php

use Alura\Banco\Modelo\Conta\{ContPoupanca, ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
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


//try catch tratamento de erros(chama a classe SaldoInsuficienteException):
try{
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo suficiente para este saque." . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}

echo 'Seu saldo é ';
echo $conta->recuperaSaldo();


