<?php
namespace Alura\Banco\Modelo;

class Pessoa
{

    protected string $nome;
    private Cpf $cpf;




    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperacpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 4) {
            echo "impossivel nome precisa ter no minimo 4 caracteres";
            exit();
        }
    }

}
