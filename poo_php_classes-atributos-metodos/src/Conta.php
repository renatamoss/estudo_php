<?php

class Conta
{
    private $codigoDoBanco;
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0; //atributo da classe

    public function __construct(Titular $titular)
    {
        $this->codigoDoBanco = 77;

        $this->titular = $titular;
        
        $this->saldo = 0;

        self::$numeroDeContas++; //atributo da classe
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo 'Valor inválido para depósito.';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Valor indisponível.';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaCodigoBanco(): int
    {
        return $this->codigoDoBanco;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular():string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperarNomeTitular():string
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaTotalContas(): int
    {
        return self::$numeroDeContas;
    }

}
