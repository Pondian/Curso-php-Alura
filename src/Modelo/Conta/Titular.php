<?php

namespace Alura\Banco\Modelo\Conta;

use  Alura\Banco\Modelo\Pessoa;
use  Alura\Banco\Modelo\Cpf;
use  Alura\Banco\Modelo\Endereco;
use Autenticavel;
use InvalidArgumentException;

class Titular extends Pessoa implements Autenticavel
{

    private Endereco $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }


    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }


    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "abc";
    }
}
