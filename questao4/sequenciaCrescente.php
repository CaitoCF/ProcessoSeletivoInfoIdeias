<?php
    $array = array(1, 3, 2);

    function sequenciaCrescente ($array) {
        foreach ($array as $value) {
            $arrayOriginal = $array;
            unset($arrayOriginal[$value]);
            unset($array[$value]);
            sort($array);
            $ordenado = $array;
            if ($ordenado === $arrayOriginal) {
                return true;
                break;
            } else {
                return false;
            }
        }
    }

    $a=sequenciaCrescente($array);
    echo $a;


    //Essa não tive tempo de continuar mas foi quase :'(
?>