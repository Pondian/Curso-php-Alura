<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();

echo $primeiraConta->nomeTitular;
$primeiraConta-> nomeTitular = "joao";
echo $primeiraConta->nomeTitular;
 