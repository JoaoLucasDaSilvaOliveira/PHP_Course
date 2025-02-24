<?php

    #extrai as chaves e valores de um array associativo para variáveis com o nome das chaves;
        //caso já exista uma variável com aquele nome, será sobrescrita
        //faz o mesmo que o desestructuring

    $arr = [
        "nome" =>"João",
        "idade" =>20,
        "altura" =>1.71,
        "job" =>"Programador"
    ];
    extract($arr);
    echo "Nome: $nome<br>Idade: $idade<br>Altura: $altura<br>Profissão: $job<br>";