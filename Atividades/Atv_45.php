<?php

    #crie um array com a func range de 10 a 45;
        //imprima todos os números com uma soma de 6
        //se a soma passar de 30, imprima uma mensagem de "o valo é muito alto" juntamente com o número

    $arr = range(10, 45);
    foreach ($arr as $key => $value) {
        $newVal = $value +6;
        if ($newVal > 30)
        {
            echo "O valor $newVal é muito alto!<br>";
        } else {
            echo "$newVal<br>";
        }
    }