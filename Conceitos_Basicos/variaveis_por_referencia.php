<?php

    #notação &=
    $x=2;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;

    $x = 10;

    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $y = 30;

    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;