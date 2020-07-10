<?php

use  Alura\Banco\Modelo\{Pessoa,Cpf,Endereco,Funcionario};
use  Alura\Banco\Modelo\Conta\{Conta,Titular,ContaPoupanca,ContaCorrente};

require 'autoload.php';

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius, 1);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); 

echo $primeiraConta->$vinicius->recuperaNome() . PHP_EOL;
echo $primeiraConta->$vinicius->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
