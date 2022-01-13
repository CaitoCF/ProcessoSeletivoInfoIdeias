<?php
    global $seculo;
    $ano = $_POST["ano"];
    function calculaSeculo($ano)
    {
        $seculo = ceil($ano/100);
        return $seculo;
    }
    $seculo = calculaSeculo($ano);
    if ($seculo) {
        echo 'O ano '.$ano.' pertence ao século '.$seculo;
    } else {
        echo "Informe um valor válido!";
    }
?>
