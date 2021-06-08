<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacao
{

    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotalBonificacao(): float
    {
        return $this->totalBonificacoes;
    }
}
