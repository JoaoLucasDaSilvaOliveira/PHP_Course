<?php

    class Pessoa {
        function falar () {
            echo "Olá, sou uma pessoa<br>";
        }
        function somar ($x,$y){
            echo $x+$y . "<br>";
        }
    }

    $joao = new Pessoa;
    $joao->falar();
    $pedro = new Pessoa;
    $pedro->falar();
    $joao->somar(1,2);
    $pedro->somar(3,4);