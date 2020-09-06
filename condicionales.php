<?php
    /*
    if (condicion) {
        # instrucciones
    }
    */
    /* Operadores de comparacion:

        == Igualdad
        < Menor que
        > Mayor que
        <= Menor o igual que
        >= Mayor o igual que
        != Diferente
        ! Negacion

     */

    /* Operadores de logicos:

        && - Evalua que se cumpla ambas condiciones
        ||, OR - Evalua que se cumpla al menos una condicion
        xor - Evalua que se cumpla una y solo una conidicion

    */
    $edad = 17;
    $nombre = 'Carlos';
    if ($edad >= 18 && $nombre == 'Carlos' ) {
        echo '<h1> Bienvenido </h1>';
    } if ($edad < 18 or $nombre != 'Carlos' ) {
        echo '<h1> Eres menor de edad y/o no te llamas carlos</h1>';
    }
?>