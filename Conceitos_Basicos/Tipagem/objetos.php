<?php

    class Pessoa {
        function falar (){
            echo "Olá!";
        }
        public $idade = 20;
    }

    $joao = new Pessoa();
    $joao->falar();
    //adicionando caracteristicas após a criação do objeto
    $joao->nome = "João";
    echo "<br>$joao->nome, idade: $joao->idade";