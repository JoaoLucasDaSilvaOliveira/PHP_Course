<?php

    $pessoa = ["João", 20, "Programador"];

    //separa em vars
    list($nome, $idade, $job)=$pessoa;

    echo "Nome: $nome, Idade: $idade, Profissão: $job<br>";

    //ou podemos usar dessa forma (php 7.1+)
    [$nome, $idade,$job] = $pessoa;
    echo "Nome: $nome, Idade: $idade, Profissão: $job<br>";