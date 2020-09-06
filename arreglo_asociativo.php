<?php
    # Los arreglos asosiativos nos permiten acceder a sus valore de una forma mas explicita.
    $alex = array('telefono' => '5572754109','edad' => 25,'apellido' =>  'sasa','pais' =>'mexico');
    # Al igual que en los arreglos indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
    echo $alex['telefono'] ='111111';
    echo 'el telefono de Alex es:' . $alex['telefono'];
?>