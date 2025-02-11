<?php

    #crie um array associativo com caracteristicas de uma pessoa e faça um if checando se ela eh maior de idade
    function ageCheck ($age) {
        if ($age >= 18 && is_int($age)) {
            return "Já pode ser preso!<br>";
        } else if (is_int($age)) {
            return "Vai pra FEBEM<br>";
        } else {
            return "Não colocou número GENIO<br>";
        }
    }
    $arrayPessoas = [
        "pessoa1" => [
            "nome"=> "João",
            "idade"=> 20
        ],
        "pessoa2"=> [
            "nome"=> "PedrinhoDmenor",
            "idade"=> 13
        ],
        "pessoa3"=> [
            "nome"=> "PedrinhoDmaior",
            "idade"=> 18
        ]
    ];
    echo "Regra: maior de 18 anos pode ser preso, menores vão para a FEBEM!<br><br>";
    foreach ($arrayPessoas as $key => $value) {
        echo $arrayPessoas[$key]["nome"],"<br>Idade: ",$arrayPessoas[$key]["idade"],"<br>Status: ",ageCheck($arrayPessoas[$key]["idade"]), "<br>";
    }