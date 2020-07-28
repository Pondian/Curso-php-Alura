<?php

namespace Alura\Banco\Modelo;

use AcessoPropriedades;
use NomeCurtoException;

abstract class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
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

    final protected function validaNome(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 4) {
            throw new  NomeCurtoException($nomeTitular);
        }

        $this->nome = $nomeTitular;
    }
}
