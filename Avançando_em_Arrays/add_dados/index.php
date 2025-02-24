<?php
    header("Content-type: application/json");
    $arr = [];

    $arr[0] = 10;
    $arr[1] = 20;
    $arr[2] = 30;
    $arr[3] = ["nome" => "João", "idade" => 20];

    // print_r(json_encode(["data" => $arr]));

    $arrAsoc = [];

    $arrAsoc["pessoa1"] = ["nome" => "João", "idade" => 20];
    $arrAsoc["pessoa2"] = ["nome" => "Pedro", "idade" => 28];
    $arrAsoc["pessoa3"] = ["nome" => "Marselo", "idade" => 42];

    print_r(json_encode(["data" => $arrAsoc]));