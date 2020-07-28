<?php

require_once 'autoload.php';

class NomeCurtoException extends Exception
{

    public function __construct()
    {
        $mensagem = "O nome informado é muito curto, por favor tente navamente";
        parent::__construct($mensagem);
    }
}
