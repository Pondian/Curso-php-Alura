<?php

require_once 'src/Cpf.php';

class Titular
{
    private Cpf $cpf;
    private string $nome;


    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 4) {
            echo "impossivel nome precisa ter no minimo 4 caracteres";
            exit();
        }
    }

}
