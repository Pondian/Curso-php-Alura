<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;


    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar < 0) {
            echo "você nao pode depositar um valor negativo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }
}



$primeiraConta = new Conta();
$primeiraConta->$cpfTitular;
$primeiraConta->$nomeTitular;
$primeiraConta->$saldo;

$novaConta = new Conta();
$novaConta->$cpfTitular;
$novaConta->$nomeTitular;
$novaConta->$saldo;
