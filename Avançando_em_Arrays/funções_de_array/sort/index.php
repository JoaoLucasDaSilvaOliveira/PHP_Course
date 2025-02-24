<?php

    $arr = [5,4,8,9,3,7,4];
    //ordena do maior ao menor
    sort($arr);

    print_r($arr);
    echo "<br>";
    rsort($arr);

    print_r($arr);

    $nomes = [
        "João","Pedro","Henrique","gust","pamela","lora","pqp",
    ];

    sort($nomes);

    print_r($nomes);
    echo "<br>";
    rsort($nomes);
    print_r($nomes);