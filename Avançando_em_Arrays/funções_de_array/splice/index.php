<?php

    #o retorno são os elementos retirados do array
    $arr = [1,2,3,4,5];
    print_r($arr);
    $removidos = array_splice( $arr,1,2);
    echo "<br>";
    $strRemovidos = implode(", ", $removidos );
    echo $strRemovidos;
    echo "<br>";
    print_r($arr);

    echo "<br>";
    
    $newarr = [1,2,3,4,5];
    echo "Novo array<br>";
    print_r($newarr);
    $removidos = array_splice( $newarr,1,-1);
    echo "<br>";
    $strRemovidos = implode(", ", $removidos );
    echo $strRemovidos;
    echo "<br>";
    print_r($newarr);

