<?php

namespace Alura;

require 'Saldo.php';

$saldos = [
    2500,
    3000,
    1000,
    5000,
    2000
];

$saldo = new Saldo();
$menorSaldo = $saldo->calculaSaldo($saldos);
echo "O menor saldo é $menorSaldo.";


