<?php

    #trim(): limpa todos os espaços em branco
    #ltrim(): limpa todos os espaços em branco na esquerda do texto 
    #rtrim(): limpa todos os espaços em branco na direita do texto

    $str1 = "             João            ";
    echo "O nome é: $str1.<br>";
    $strClean = trim($str1);
    echo "O nome é: $strClean.<br>";