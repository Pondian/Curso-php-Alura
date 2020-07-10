<?php
namespace Alura\Banco\Modelo;

use AcessoPropriedades;

abstract class Pessoa
{
    use AcessoPropriedades; 
    protected string $nome;
    private Cpf $cpf; 




    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaNome($nome);
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperacpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 4) {
            echo "impossivel nome precisa ter no minimo 4 caracteres";
            exit();
        }
    }

}
