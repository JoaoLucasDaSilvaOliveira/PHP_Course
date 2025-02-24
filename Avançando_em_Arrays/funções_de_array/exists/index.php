<?php

    $arr = [
        "Nome" => "João",
        "Idade" => 20,
        "Job" => "Programador",
    ];

    #com array_key_exists
        //problema: só acha a chave, não acha valores!
    echo array_key_exists("Nome", $arr);

    #com isset
    echo isset($arr["Nome"]) ? "Tem a chave" :"Não tem a chave";
