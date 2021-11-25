<?php
    #1.	Dado un número n encontrar todos los múltiplos de 3 y 5 menores al número dado, el método debe retornar la suma de los múltiplos encontrados. 
    #Ejemplo: si el número ingresado es 10, los múltiplos de 3 y 5 menores a 10 son: 3, 5, 6, 9, el resultado de la función debe ser 23, debido a que es la suma de 3, 5, 6, 9.
    
    function prueba1($n){
        $multiply = [];

        for($i = 1; $i < $n; $i++){
            if($i % 3 == 0){
                array_push($multiply, $i);
            };

            if($i % 5 == 0){
                array_push($multiply, $i);
            };
        };

    return array_sum($multiply);
}

$result = prueba1(10);

echo $result;

?>