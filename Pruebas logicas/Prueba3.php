<?php
    #3.	Dada una frase, devolver la frase donde las palabras con mayor a 5 letras esten al revés. 
    # Ejemplos a.	Dado “Bienvenido a Treda Solutions” retornar “odinevneiB a Treda snoituloS”

    function prueba3($string){
        $words = explode(" ", $string);
        $result = "";

        foreach ($words as $key => $value) {
            if(strlen($value) > 5){
                $result = $result.strrev($value). " ";
            }else{
                $result = $result.$value." ";
            };
        };

        return $result;
    }

    $result = prueba3("Bienvenido a Treda Solutions");
    echo $result;
?>