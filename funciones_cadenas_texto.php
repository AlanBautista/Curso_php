<?php
    #htmlspecialchars() convierte caracteresespeciales en entidadeshtml evita la inyeccion de codigo
    /*$texto = " < >  & ' ";
    echo htmlspecialchars($texto);*/
    
    # trim(); permite elimiar todos los espacios en blanco que se ecuentren al inicio y fin de una caena de texto
    /*$texto = ' Hola ';
    echo $texto;*/
    #strlen() nos permite calcular los caracteres de un string
    /*$texto = ' Hola ';
    echo strlen($texto);*/
    # substr()permite retornar un pedazo de una linea de texto
    # substr($texto,1,2) $texto = variable, 1 = a partir de donde, 2 =caracteres a devovler
    /*$texto = 'Hola';
    echo substr($texto,1,2);*/
    #strtoupper(); permite convertir los caracteres en mayusculas
    /*$texto = 'Hola';
    echo strtoupper($texto);*/
    #strtolower(); permite convertir los caracteres en minusculas
    /*$texto = 'Hola';
    echo strtolower($texto);*/
    #strpos() permite conocer la posicion que se encuentra en una cadena
    #strpos($texto,'a'); $texto variable donde se guarda la cadena, 'a' la letra a buscar
    $texto = 'Hola';
    echo strpos($texto,'a');
?>