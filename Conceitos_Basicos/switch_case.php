<?php

    function calcularDesconto ($valor, $categoria){
        switch ($categoria){
            case "Eletronico":
                return $valor*=2;
            
            case "Teste":
                return $valor+1;

            default: return $valor;
        }
    }
    echo calcularDesconto(10, "Eletronico"), "<br>";

    //forma alternativa: match

function calcularDesconto2($valor, $categoria) {
    return match ($categoria) {
        "Eletronico" => $valor - 1,
        "Teste" => $valor + 1,
        default => $valor,
    };
}

echo calcularDesconto2(10, "Teste");