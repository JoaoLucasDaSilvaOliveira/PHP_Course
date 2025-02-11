<?php

    //checando se eh int
    if (is_int(55)){
        echo"Eh inteiro<br>";
    }
    if (is_int("Oi<br>")){
        echo"Eh inteiro";
    }
    $num = 0;
    if (is_int($num)){
        echo"Eh inteiro<br>";
    }