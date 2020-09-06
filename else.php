<?php
    #if else
        /*
            $edad = 16;
            if ($edad >= 18) {
                echo "Bienvenido";
            }else {
                echo "No eres mayo de edad";
            }
        */
    #if anidados
        /*
            if (condition) {
                if (condition) {
                    # code...
                }
            }
        */
    
    $mes = 'Enero';
    if ($mes == 'Diciembre') {
        echo 'Feliz Navidad';
    } elseif ($mes == 'Enero') {
        echo 'Feliz año nuevo';
    } elseif ($mes == 'Julio') {
        echo 'Feliz Julio';
    } else {
        echo 'El mes que pusiste no tiene celebracion';
    }
    
    
    
   
?>