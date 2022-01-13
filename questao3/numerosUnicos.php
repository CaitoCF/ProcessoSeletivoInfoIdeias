<?php

    function raioAleatorizante() {
        $arrayAleatorio = "";
        $i = 1;
        while ($i<=20) {
            $arrayAleatorio .= rand(1, 20).", ";
            $i++;
        }
        return $arrayAleatorio;
    }

    $array = explode(", ", substr_replace($array=raioAleatorizante(), "", -2));
    echo "Esses são os 20 números aleatórios: ";
    echo "<pre>";
    var_dump($array);
    echo "<br><br><br>";
    echo "Esses são os os números únicos: ";
    echo "<pre>";
    var_dump(array_unique($array));

?>