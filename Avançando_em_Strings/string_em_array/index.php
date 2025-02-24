<?php

    $frase = "Olá me chamo João";
    $fraseArray = explode (" ", $frase );

    print_r( $fraseArray );
    echo "<br>";

    $desafio = "este ítem está em promoção";
    $arr = explode (" ", $desafio );
    $newStr = "";
    foreach ( $arr as $key => $value ) {
        if ($value == "este"){
            $newStr.= ucfirst("$value");
        } else if ($value == "promoção"){
            $newStr.=strtoupper($value);
        } else {
            $newStr.= $value ;
        }
        $newStr.= " ";
    }
    echo $newStr;