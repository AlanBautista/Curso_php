<?php
    #las funciones solo se dediquen a hacer una  sola cosa
    function calcular_area_triangulo($base, $altura){
        $resultado = ($base * $altura) / 2;
        return $resultado;
    }
    $resultado_area_t = calcular_area_triangulo(10, 10);
    echo 'el triangulo tine un area de ' . $resultado_area_t . ' metros cuadrados';
?>