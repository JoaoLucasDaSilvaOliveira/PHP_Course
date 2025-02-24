<?php

    $arr1 = [
        1,2,3,4,5,6
    ];
    $arr2 = [
        1,2.2,3.3,4.4,
    ];
    $arr3 = [
        "João","Lucas", 6
    ];
    //usa o primeiro parametro como referencia
    //procura nos outros param, os elementos do primeiro param
    //retorna a diferença, o elemento que tem no primeiro param e não tem no(s) outro(s)
    $diff = array_diff($arr1,$arr2, $arr3);
    print_r($diff);
