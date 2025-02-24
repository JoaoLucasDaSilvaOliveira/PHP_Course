<?php

    #instruções
        //crie uma função que recebe caracteristicas de algum objeto como arg, retorne apenas os que custam mais que 10;

        function data ($array){
            $itens = [];
            foreach ($array as $item => $preco) {
                echo "$item, $preco<br>";
                //array_push($itens,$keys[$i]);
            }
            echo "<br>";
            $keys = array_keys($array);
            for ($i = 0; $i < count(array_keys($array)); $i++) {
                if ($array[$keys[$i]] > 10){
                    array_push($itens,$keys[$i]);
                }
            }
            return $itens;
        }
        $arr = [
            "Cebola" => 5,
            "Cenoura" => 8,
            "Frango" => 10,
            "Carne" => 30,
            "Ovo" => 20,
        ];
        foreach (data($arr) as $key => $value) {
            echo "<h1>Produtos Caros</h1>";
            echo "$value<br>";
        }