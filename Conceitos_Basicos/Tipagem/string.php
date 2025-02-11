<?php

    #para string tanto faz "" ou '', mas as aspas duplas interpretam variáveis
    $nome = "João";
    $num = 3;
    echo "$nome";
    echo "<br>";
    echo '$nome<br>';
    //checando se eh string
    if (is_string($nome)){
        echo "eh string<br>";
    } else {
        echo "num eh string<br>";
    }
    if (is_string($num)){
        echo "eh string<br>";
    } else {
        echo "num eh string<br>";
    }
