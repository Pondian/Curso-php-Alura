<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf("123.456.789-10"), 'joão'));

$primeiraConta-> depositar(500);