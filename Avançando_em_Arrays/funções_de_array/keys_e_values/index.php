<?php
    header("Content-type:Application/json");
    $carro = [
        "marca" => "BMW",
        "motor" => 2.4,
        "teto_solar" => true,
    ];

    $response = [
        "data" => $carro,
        "keys" => array_keys($carro),
        "values" => array_values($carro)
    ];

    echo json_encode($response);
    echo "\"\nConsumindo a API\"";
    foreach($response['keys'] as $key){
        echo "\n$key";
    }
    foreach($response['values'] as $key ){
        echo "\n$key";
    }

