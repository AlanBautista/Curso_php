<?php
    $meses = array(
        'Enero', 'febrer','Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
        <ul>
            <?php 
            # Mediante el ciclo foreach podemos recorrer un arreglo y ejecutar determinadas instrucciones por cada elemento del arreglo.
		# Esta es la forma mas facil de recorrer arreglos en PHP.
                foreach($meses as $mes){
                    echo '<li>' . $mes . '</li>';
                }
            ?>
        </ul>
</body>
</html>