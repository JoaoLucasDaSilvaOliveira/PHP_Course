<?php

    $pessoas = [
        "João" => [
            "nomeCompleto"=> "João Lucas da Silva Oliveira",
            "id"=> 1,
        ],
        "Pedro" => [
            "nomeCompleto" => "Pedro Henrique Correa",
            "id" => 2
        ]
    ];

    foreach ($pessoas as $key => $value) {
        print_r("$key =     ");
        foreach ($value as $key2 => $value2) {
        print_r("$key2: $value2<br>");
        }
    }