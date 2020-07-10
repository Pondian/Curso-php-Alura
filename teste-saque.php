<?php

use  Alura\Banco\Modelo\Conta\{ContaCorrente,Titular};
use  Alura\Banco\Modelo\{Cpf,Endereco};
use Alura\Banco\Modelo\Conta\ContaPoupanca;


require_once 'autoload.php';



$conta->depositar(500);
$conta->sacar(100);


$conta->recuperaSaldo();
