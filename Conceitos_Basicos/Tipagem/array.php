<?php

    $array = [1,2,3,"João"];

    print_r($array);
    echo "<br>",$array[3];
    print("<br>$array[2]");

    //array associativo: chave=>valor

    $map = ["nome"=>"João", "idade"=>20];
    echo "<br>{$map["idade"]}";