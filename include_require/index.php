<?php
    function suma($numero, $numero2){
        return $numero + $numero2;
    }
    #include permite incluir un archivo si falla muestra warning y muestra el resto del programa
    #include si el archivo no es muy importante
    //include 'vista.php';
    #include_once solo lo llama una vez
    #require permite incluir un archivo si falla muestra fatal error y no muestra el resto del programa 
    #require si es muyimportante
    require 'vista.php';
?>