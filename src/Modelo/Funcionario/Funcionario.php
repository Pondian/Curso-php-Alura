<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);

        $this->salario = $salario;
    }

    public function recebeAumento(float $valorAumento):void
{
    if ($valorAumento < 0 ){
        echo "aumento deve ser positivo";
        return;
    }
    $this->salario += $valorAumento;
}


    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float;


    
}
