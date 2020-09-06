<?php

    #permite especifiacar el tipo de valor que se va a regresar
    declare(strict_types = 1); //lo forza aser estricto con las variables
    function obtenerEdad() : int{ //nombreFunction() : TipoVariable
        $edad = ' 23';
        return $edad;
    }
    echo obtenerEdad();
