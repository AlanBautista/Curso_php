<?php
    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );
    # ejemplo con arreglo asociativo
    $Alejandro = array( 'telefono' => 5572754109, 'edad' => 20, 'pais' => 'Mexico');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php 
            /*foreach ($meses as $mes ) {
            echo '<li>' . $mes . '</li>';
            } */
            #ejemplo arreglo asociativo
                foreach ($Alejandro as $datos => $valor) {
                    echo '<li>'.  $datos . ': ' . $valor . '</li>';
                }
        ?>
    </ul>
    <p>El ciclo foreach no se especifica las veces que se ejecuta, el ciclo se ejecuta la cantidad
    de elementos que haya en el arreglo</p>
</body>
</html>