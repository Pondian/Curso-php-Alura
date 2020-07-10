<?php

use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
    
    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo Indisponivel";
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }


}