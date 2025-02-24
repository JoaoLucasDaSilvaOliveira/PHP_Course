<?php

    #inclui apenas uma vez 
    echo "TESTANDO<br><br>";
    //include != include_once
    include_once "./teste.php";
    include_once "./teste.php";
    include "./teste.php";
    include "./teste.php";