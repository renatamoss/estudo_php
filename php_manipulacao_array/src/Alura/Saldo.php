<?php

class Saldo
{
    public function calculaSaldo(array $saldos): float
    {
        sort($saldos); //ordenando o array

        foreach ($saldos as $menorSaldo) {
            return $menorSaldo;
        }
    }
}
