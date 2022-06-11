<?php

declare(strict_types=1);

abstract class Validar
{   // o static facilita a chamada do metodo, sem que a necessidade de instancia-lo antes
    public static function validarCpf(string $cpf): void
    {
        if (strlen($cpf) !== 11){   // apenas numeros
            die('ops Cpf invalido');
        }
    }
}