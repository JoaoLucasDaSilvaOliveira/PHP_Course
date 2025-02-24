<?php

    function teste ($a = "teste") {
        echo "O valor de a é {$a}<br>";
    }

    teste ();
    teste ("João");

    #boa prática: por os args default por ultimo!

    function teste2 ($a = "teste", $b) {
        echo "O valor de a é {$a} e o de b é {$b}<br>";
    }
    /* Não funciona pois primeiro preenche a, e dps o b
    teste2 ("Testando123"); */
    #jeito certo
    teste2 ("teste", "Testando123");

    function teste3 ($b, $a = "teste") {
        echo "O valor de a é {$a} e o de b é {$b}<br>";
    }

    //agora funciona, pois o arg default será o último a ser passado!

    teste3 ("Testando456");

    