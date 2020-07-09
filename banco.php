<?php

require 'autoload.php';

use  Alura\Banco\Modelo\Pessoa;
use  Alura\Banco\Modelo\Cpf;
use  Alura\Banco\Modelo\Endereco;
use  Alura\Banco\Modelo\Conta\Conta;
use  Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->$vinicius->recuperaNome() . PHP_EOL;
echo $primeiraConta->$vinicius->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
