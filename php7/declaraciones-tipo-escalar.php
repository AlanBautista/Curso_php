<?php
    #permite especifiacar el tipo de valor que se va a recibir
    declare(strict_types = 1);//hace que se vuelva mas estricto
    function cuadrado(int $numero)//ayuda a que haya mas seguidad
    {
        return $numero *  $numero;
    }
    $numero = '8';
    echo 'El cuadrado de ' . $numero . 'es ' . cuadrado($numero);