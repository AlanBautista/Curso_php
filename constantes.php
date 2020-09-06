<?php
    //una constante permite establecer un valor pero su valor no cambia
        #variable
            $nombre = "<br>Alan";
            echo $nombre;
            $nombre = "Israel<br>";
            echo $nombre;
        #constante, las constantes son variables globales
            //estructura define('nom_const,valor_guardar)
            define('PI', 3.14);
            define('NOMBRE','Carlos');
            echo NOMBRE;
            echo PI;

?>