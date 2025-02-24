<?php

    $arr1 = [
        1,2,3,4,5,6
    ];
    $arr2 = [
        1.1,2.2,3.3,4.4,
    ];
    $arr3 = [
        "João","Lucas"
    ];
    $arrayMerge = array_merge($arr1, $arr2, $arr3);
    //concatena na ordem que foi passada acima
    print_r($arrayMerge);