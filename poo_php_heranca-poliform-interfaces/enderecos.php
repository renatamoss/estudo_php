<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Sol', 'Estrela', 'Constelacao', '100');
$segundoEndereco = new Endereco('Lua', 'Satelite', 'Espaco', '200');

echo $umEndereco;
echo $segundoEndereco;

//por atributo utilizando o método mágico: public function __get($nomeAtributo)
echo $umEndereco->cidade . PHP_EOL;
echo $umEndereco->rua . PHP_EOL;
echo $umEndereco->bairro . PHP_EOL;
echo $umEndereco->numero . PHP_EOL;