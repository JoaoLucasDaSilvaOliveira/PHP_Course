<?php

$nome = "João Lucas";
$sobrenome = "da Silva Oliveira";

echo $nomeCompleto = $nome . " " . $sobrenome . "<br>";

//podemos fazer assim tb
    $nome = "João";
    $nome .= " Lucas";
    $nome .= " da Silva";
    $nome .= " Oliveira";
    $nome .= "<br>";
    echo $nome;

    echo $nomeCompleto = $nome;