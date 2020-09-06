<?php
    $meses = array(
        'Enero', 'Febrero','Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        #con sort() se ordenan los arreglos de forma alfabetica
             #sort($meses); 
        #con rsort() se ordenan los arreglos de forma alfabetica pero inversa
             //rsort($meses);
    $numeros = array(1,22,23,10,9,5,70,100,20);
        #con sort() se ordenan los arreglos de forma numerica
            sort($numeros);
        #con rsort() se ordenan los arreglos de forma numerica pero inversa
        rsort($numeros);

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
                foreach($numeros as $numero){
                    echo '<li>' . $numero . '</li>';
                }
            ?>
        </ul>
</body>
</html>