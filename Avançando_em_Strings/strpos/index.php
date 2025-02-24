<?php

    $str = "Bom dia, me chamo João";
    $encontrar = strpos($str, "B");
    //retorna a primeira posição encontrada. Obs.: é case sentitive
    echo "$encontrar<br>";

    $encontrar = strpos($str,"J");
    echo "$encontrar<br>";
    $encontrar = strrpos($str,"o");
    echo "$encontrar<br>";