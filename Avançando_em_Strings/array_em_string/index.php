<?php

    $frase = "Olá me chamo João";
    $fraseArray = explode (" ", $frase );

    print_r( $fraseArray );
    echo "<br>";

    $desafio = "este ítem está em promoção";
    $arr = explode (" ", $desafio );
    $novoArr = [];
    foreach ( $arr as $key => $value ) {
        if ($value == "este"){
            array_push ( $novoArr, ucfirst($value) );
        } else if ($value == "promoção"){
            array_push ( $novoArr, strtoupper($value) );
        } else {
            array_push ( $novoArr, $value );
        }
    }
    echo implode(" / ", $novoArr );