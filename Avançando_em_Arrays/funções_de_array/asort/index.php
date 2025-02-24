<?php
    $arr = [
        "Maria"=> "zinha",
        "Joao"=> "Lucas",
        "Pedro"=> "Henrique"
    ];
    //asort
        //sort por valor
    asort($arr);
    print_r($arr);
    echo "<br>";
    //reverso: arsort (descresce)

    //ksort
        //sorts by key
    ksort($arr);
    print_r($arr);
    echo "<br>";
    //reverso: krsort (descresce)