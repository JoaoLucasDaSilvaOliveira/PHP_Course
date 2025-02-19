<?php

    echo $numString = "20", "<br>";
    echo gettype($numString), "<br>";
    echo $numInt = (int) $numString, "<br>";
    echo gettype($numInt), "<br>";

    $char = 'abc';
    $teste  = (int) $char;
    echo $teste, "<br>";
    echo gettype($teste), "<br>";