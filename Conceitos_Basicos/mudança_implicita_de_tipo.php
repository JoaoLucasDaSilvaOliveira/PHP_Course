<?php

    if (is_float(5/2)){
        echo "É float<br>";
    }

    //operador concatenação!
        #.
    if (is_string(2.0)){
        echo "É string<br>";
    }
    if (is_string(2 . 0)){
        echo "É string<br>";
    }

    $nome = "João Lucas";
    $sobrenome = "da Silva Oliveira";
    
    echo $nomeCompleto = $nome . " " . $sobrenome;