<?php
    $meses = array(
        'Enero', 'Febrero','Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'septiembre', 'Octubre', 'Noviembre', 'Diciembre');
            #recorriendo con ciclo for
                
                for ($i=0; $i < count($meses); $i+=2) { 
                echo $meses[$i] . '<br>';
                }
                
            #recorriendo con ciclo while
              /*  
            $contador = 0;
            while ($contador < count($meses)) {
                echo $meses[$contador] . '<br>';
                $contador++;
            }
            */
?>