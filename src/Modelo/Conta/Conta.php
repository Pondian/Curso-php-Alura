<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;
use InvalidArgumentException;
use SaldoInsuficienteException;

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
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }
        $this->saldo -= $valorSaque;
    }
    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new InvalidArgumentException();
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
