<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;

//primeira conta:
$endereco = new Endereco('Petrópolis', 'Parque', 'Jorge', '71B');
$bruce = new Titular(new CPF('123.456.789-10'), 'Bruce Marks', $endereco);
$primeiraConta = new ContaCorrente($bruce);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($primeiraConta);

//segunda conta:
$sara = new Titular(new CPF('698.549.548-10'), 'Sara Marques', $endereco);
$segundaConta = new ContaPoupanca($sara);
var_dump($segundaConta);

//terceira conta:
$outroEndereco = new Endereco('Bento', 'Paraiso', 'Jardins', '1D');
$samuel = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Samuel', $outroEndereco));

//excluindo a segunda conta
unset($segundaConta); 

echo 'Quantidade total de contas ' ;
echo Conta::recuperaNumeroDeContas();
