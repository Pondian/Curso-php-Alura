<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

   


    public function __construct(Titular $titular)
    {

        $this->titular = $titular;
        $this->saldo = 0;
  
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    public function sacar(float $valorASacar)
    {
        $tarifaASacar = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaASacar;
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSaque;
    }
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "você nao pode depositar um valor negativo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    
    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumerodeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
    
}
