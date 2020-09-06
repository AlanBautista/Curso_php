<?php
    #string: Cadena de texto
    $nombre = "Israel";
    #integer: Numero entero
    $numero = 7;
    #Doble/Float:Numeros con decimales
    $numero_decimal = 7.7;
    #Boolean: Verdadero o falso True/False
    $verdadero = false;
    // variable es un contenedor que almaacena informacion para poder trabajar con esta despues
    //para imprimir una variable mas un texto se usan comillas dobles o en comillas simplesse usa la concatenacion
    echo 'Hola,' . $nombre;
    echo "<br> Hola, $nombre";
    //para conocer e tipo de dato una variable gettype(variable);
    echo gettype($numero);
?>