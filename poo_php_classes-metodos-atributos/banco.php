<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$sara = new Titular(new CPF('123.456.789-10'), 'Sara Marques');
$primeiraConta = new Conta($sara);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

var_dump($primeiraConta);

$samuel = new Titular(new CPF('123.456.789-99'), 'Samuel');
$segundaConta = new Conta($samuel);
var_dump($segundaConta) . PHP_EOL;

$bruce = new Titular(new CPF('123.456.789-44'), 'Bruce Marques');
$terceiraConta = new Conta($bruce);
var_dump($terceiraConta);

echo "Total de contas ativas: ";
echo Conta::recuperaTotalContas() . PHP_EOL;

unset($segundaConta);

echo "Total de contas ativas: ";
echo Conta::recuperaTotalContas();
