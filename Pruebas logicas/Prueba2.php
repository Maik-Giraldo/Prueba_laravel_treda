<?php
    #2.	Dado un string separado por espacios, guiones y guiones bajos. Se debe implementar una función camel case que transforme la oración. Ejemplos
    # a.	Dado “Bienvenido a_Treda-solutions” retornar “BienvenidoATredaSolutions”
    # b.	Dado “bienvenido-a_Treda solutions” retornar “bienvenidoATredaSolutions”

    #a
    function prueba2($string){
        $list_string = str_split($string);
        $result = "";
        $found = false;

        foreach ($list_string as $key => $value) {
            if($found){
                $result = $result.strtoupper($value);
            }else{
                if($value == " " || $value == "-" || $value == "_"){
                    $found = true;
                }else{
                    $found = false;
                };
            };
        };

        return $result;
    }

$result = prueba2("Bienvenido a_Treda-solutions");
echo $result;
?>
