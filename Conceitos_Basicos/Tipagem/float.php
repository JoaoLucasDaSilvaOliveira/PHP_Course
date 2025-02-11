<?php

    $num = 1.2;
    echo $num, "<br>";
    echo 12.5 + 13.5, "<br>";

    #checando se eh float
    $number = 1.5;
    if (is_float($number)) {
        echo "Eh float<br>";
    }
    if (is_float("1.5")) {
        echo "Eh float<br>";
    } else {
        echo "Num eh float<br>";
    }