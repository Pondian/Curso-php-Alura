<?php

namespace Alura\Banco\Service;

use Autenticavel;
use Diretor;

class Autenticador implements Autenticavel
{

    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "ok usuario logado no sistema";
        } else {
            echo "Ops. Senha incorreta.";
        }
    }
}
