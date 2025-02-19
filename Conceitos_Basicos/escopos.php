<?php

    //ex. escopo local
    $x = 10;

    function teste (){
        $x = 5;
        echo "$x <br>";
    }
    echo "$x <br>";
    teste();
    echo "$x <br>";

    //escopo global
    $teste_var = "ads";

    function funcao (){
        //puxa do escopo global
        //atenção! passa a tratar da variavel como se fosse por referencia, ou seja, mudou na função, muda no global!
        global $teste_var;
        echo "$teste_var <br>";
    }
    funcao();

    //escopo estático
        //mantem os valores para as próximas execuções
        function testeEstatico (){
            static $a = 0;
            $a++;
            echo "$a <br>";
        }
        for ($i=0; $i<4;$i++){
            testeEstatico();
        }