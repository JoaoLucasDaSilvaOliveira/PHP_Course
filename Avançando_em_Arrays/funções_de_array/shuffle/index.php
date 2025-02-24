<?php

    //organiza o conteúdo de forma aleatória
    $arr = range(0,20);
    print_r($arr);
    shuffle($arr);
    echo "<br>";
    print_r($arr);