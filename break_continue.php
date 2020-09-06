<?php
    #permiten cmanipular el uso de un ciclo
    $paises = array(
        'Mexico', 'España', 'Colombia', 'Peru', 
        'Argentina', 'Venezuela', 'Guatemala'
    );
    # break
    /*
    foreach ($paises as $pais) {
        echo $pais . '<br>';
                if ($pais == 'España') {
                    break;
                    #break va a detener el ciclo cuando aparezca españa y si la sentencia echo esta antes del iif se imprimira en españa
                }*/
                /*if ($pais == 'España') {
                    break;
                    #break va a detener el ciclo cuando aparezca españa si la sentencia echo esta despues del if se imprimira antes de españa
                }
                echo $pais . '<br>';*/
        #continue
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($paises as $pais) {
            if ($pais == 'España') {
                continue;
            }
            # continue nos permite saltar a la siguiente ejecucion del programa
            echo $pais . '<br>';
        }
    ?>
</body>
</html>