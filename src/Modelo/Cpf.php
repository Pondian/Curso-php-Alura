<?php

namespace Alura\Banco\Modelo;

use InvalidArgumentException;

final class Cpf
{

    private String $numero;

    public function __construct(string $numero)
    {


        try {
            $this->cpf = $numero;
        } catch (InvalidArgumentException $cpfInvalido) {
            echo "Esse cpf é invalido ";
        }


        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            throw new InvalidArgumentException();
        }

        $this->numero = $numero;
    }

    public function recuperaNumero(): string
    {
        return $this->cpf;
    }
}
