<?php
    #scope o ambito de variables
    //$numero = 7; // variable global, no se puede usar en una funcion a menos
    //que se pase como parametro
    function mostrarNumero(){
        $numero = 10;
        return $numero;//con return se puede sacar la variable de la funcion
    }    
    echo mostrarNumero();
    
    ?>
