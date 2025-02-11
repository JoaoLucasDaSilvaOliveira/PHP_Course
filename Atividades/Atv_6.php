<?php

    #crie um array com caracteristicas de um carro e as imprima
    $carro = [
        "qtdRodas"=> 4,
        "cor" => "preto",
        "nome" => "Celta",
        "marca" => "Fiat",
        "fip" => "R$15.000,00"
    ];
    foreach ($carro as $key => $value) {
        echo "$carro[$key]<br>";
    }