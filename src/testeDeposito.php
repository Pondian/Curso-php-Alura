<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new Cpf("102.321.156-10"),
        "willian",
        new Endereco("indianopólis", "centro", "guaranis", "1009")
    )
);

try {
    new Cpf($cpf);
} catch (\Throwable $th) {
    //throw $th;
}

try {
    $contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo";
}
