<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor("joao", new Cpf("123.456.789-10"), 4000);
$autenticador->tentaLogin($umDiretor, '1234');
