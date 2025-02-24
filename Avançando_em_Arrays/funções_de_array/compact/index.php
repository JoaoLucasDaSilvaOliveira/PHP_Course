<?php

    #cria um array associativo por meio de vars
        //chave = nome da var  e valor = conteúdo da var

    $nome = "João";
    $idade = 20;
    $job = "Programador";


    $arr = compact( "nome", "idade", "job");

    print_r( $arr );