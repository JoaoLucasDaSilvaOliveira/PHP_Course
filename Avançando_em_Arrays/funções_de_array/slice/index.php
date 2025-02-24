<?php

    $arr = range(0,10);

    //                      nome array
    //                          |     posição inicio
    //                          |         |            
    //                          |         |   qtd de elementos a serem resgatados
    //                          v         v             v
    $slice1 = array_slice($arr,5,6);

    print_r($slice1);

    echo "<br>";

    //vai até o final
    $slice1 = array_slice($arr,3);

    print_r($slice1);

    echo "<br>";

    //vai até o final, e volta 3
    $slice1 = array_slice($arr,3, -3);

    print_r($slice1);

    echo "<br>";

