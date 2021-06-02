<?php

function sacar(array $conta, float $valorSacar): array
{
    if ($valorSacar > $conta['saldo']) {
        exibeMensangem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function exibeMensangem(string $mensagem)
{
    echo $mensagem . '</br>';
}

function depositar(array $conta, float $valorDepositado): array
{
    if ($valorDepositado > 0) {
        $conta['saldo'] += $valorDepositado;
    } else {
        exibeMensangem('Depósito inválido.');
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

// PASSAGEM DA VARIÁVEL POR REFERÊNCIA:
// & e comercial: passagem de variável por **referência**
// O padrão do PHP é passar o parâmetro por valor, isto é fazer uma cópia do parâmetro. 
// Quando usamos a passagem por referência temos acesso aos valores da variável original, 
// pois passamos a referência apenas (não é feito nenhuma cópia).
// Para usar a passagem de referência basta colocar o caracter & na frente da variável.