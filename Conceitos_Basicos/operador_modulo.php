<?php

    #nada mais eh do que o famoso resto de divisão: %

    //isso não funciona! PQ?
        #o php faz um autocast de float para int, trasnformando 12.5 em 12, sendo a saída o 0!
    echo 12.5 %2.0 == 0 ? "É par" : "É impar", "<br>";
    echo 12.5 % 2 , "<br>";
    //caso queira, usar a função fmod();
    echo fmod(12.5 , 2), "<br>"; 

    //jeito certo!
    echo fmod(12.5 , 2) == 0 ? "É par" : "É ímpar";
    