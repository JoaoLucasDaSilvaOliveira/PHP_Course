<?php

    #em laços de repetição podemos usar o continue. ele funciona como se fosse um break, só que aí inves de sair do laço, ele pula para a próxima execução!
    for ($i = 0; $i < 100; $i++) {
        if ($i %2!= 0) {
            echo "<br>";
            continue;
        }
        echo $i;
    }