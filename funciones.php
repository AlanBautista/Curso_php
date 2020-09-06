<?php
    #una funcion es un bloque de codigo el cual nos sirve para ejecutarlo las veces que sean necesarias, pero no se ejecutaran hasta que uno las llame
        #ejempos de funciones ya predefinidas
        /*
        count();
        sort();
        rsort();
        var_dump();
        print_r():
        */
    #estructura de una funcion
      /* function saludo(){
        // instruccciones
        echo 'Saludos';
    }*/
    # llamando la funcion
    //saludo();
    #funciones con parametros
    /* function saludo($nombre){
        // instruccciones
        echo 'Saludos ' . $nombre . '<br>';
    }
    # llamando la funcion con parametro
        saludo('Alan');
        saludo('Alan');
        saludo('Alan');
        */
    #funvcion que devuelve el resultado
    /*function sumar($numero1, $numero2){
        $resultado = $numero1 + $numero2;
        return $resultado . '<br>';
        #no se puede escribir codigo debajo de la senencia return
        #solo se puede enviar un valor
    }
    $resultado = sumar(10 , 15);*/
    #solo maneje informacion nunca imprima en pantalla, la funcion shaga calculos manejar datos
    function saludo($nombre){
        return  'Saludos ' . $nombre . '<br>';
    }
    echo saludo('Alan');
?>