<?php

use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Funcionario(
    "willian",new Cpf("1234455555"), "chefe", 2000
);

$willian = new Funcionario("willian", new Cpf("123.456.789-10"), 4000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($willian);
$controlador->adicionaBonificacao($umFuncionario);
$controlador->recuperaTotal();