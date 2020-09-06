<?php
    #extract(); sirve para extraer los elementos de un arreglo asociativo como si fueran variables
    #permite extraer los indices  como variables
    /*$amigo = array(
        'telefono' => 5572754109,
        'edad' => 25,
        'pais' => 'Mexico'
    );
    extract($amigo);
    echo $telefono;*/
    #array_pop(); permite extrael el ultimo arreglo al final de un arreglo y lo elimina del arrreglo
    /*$semana = array(
        'Lunes', 'Martes', 'Miercoles',
        'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    $ultimo_dia = array_pop($semana);
    /*foreach ($semana as $dia) {
        echo $dia . '<br>';
    }*/
    //echo $ultimo_dia;*/
    # join() imprime el arreglo completo
    #join(', ', $semana); ', ' => separa los valores, $semana => arreglo
    /*$semana = array(
        'Lunes', 'Martes', 'Miercoles',
        'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    echo join(', ', $semana);*/

    #count() nos ayuda aconcer los elementos del arreglo
    /*$semana = array(
        'Lunes', 'Martes', 'Miercoles',
        'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    echo count($semana);*/
    #sort acomoda arreglo de arriba hacia abajo
    /*$semana = array(
        'Lunes', 'Martes', 'Miercoles',
        'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    sort($semana);
    echo join(', ', $semana);*/
    #rsort acomoda arreglo de abajo hacia arriba
    $semana = array(
        'Lunes', 'Martes', 'Miercoles',
        'Jueves', 'Viernes', 'Sabado', 'Domingo'
    );
    //rsort($semana);
    // echo join(', ', $semana);
    #array_reverse($semana); tambien acmoda el arreglo al reves pero lo hace conforme su posicion
    $semana_reverse = array_reverse($semana);
    echo join(', ', $semana_reverse);
?>