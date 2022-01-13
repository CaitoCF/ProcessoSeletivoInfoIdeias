<?php
    $numeroInicial = $_POST["numeroInicial"];
    $numeroFinal = $_POST["numeroFinal"];

    function ehPrimo($n) {
        $divisores = 0;
        for($i = 1; $i <= $n; $i++) {
            if($n % $i == 0){
                $divisores++;
            }
        }
        if($divisores == 2)  {
            $primo = true;
        } else {
            $primo = false;
        }
        return $primo;
    }
    
    function calculaPrimos($numeroUm, $numeroDois) {
        global $primos;
        for ($j = $numeroUm+1; $j<$numeroDois; $j++) {
            if (ehPrimo($j)) {
                $primos[] .= $j;
            }
        }
        return $primos;
    }
    $primos = calculaPrimos($numeroInicial, $numeroFinal);
    $primos = implode(", ", $primos);
    echo "Numeros primos entre ".$numeroInicial." e ".$numeroFinal.": ".$primos;
?>