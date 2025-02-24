<?php

    class Animal {

        public $nome;
        function escolherNome($nome){
            $this->nome = $nome;
        }
        //coloquei public pq o php fica pedindo para colocar visibilidade, não crasha se n por, mas é bom colocar
        public function saudacao(){
            return "Olá, meu nome é $this->nome";
        }

        public function bomDia (){
            echo "{$this->saudacao()}, bom dia!";
        }
    }

    $pinguim = new Animal;
    echo "O nome do animal é: $pinguim->nome<br>";
    $pinguim->escolherNome("Filo");
    echo "O nome do animal é: $pinguim->nome<br>";
    echo $pinguim->saudacao(), "<br>";
    $pinguim->bomDia();


    ///////
    class Carro {
        public $velocidade_maxima;

        public function setVelocidadeMaxima ($newVeloc){
            $this->velocidade_maxima = $newVeloc;
        }

        public function getVelocidadeMaxima (){
            echo $this->velocidade_maxima;
        }
    }