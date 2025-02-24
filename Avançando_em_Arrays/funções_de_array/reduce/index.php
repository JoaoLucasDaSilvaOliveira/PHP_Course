<?php

    $arr = [1,2,3,4,5,6];
    //soma todos os valores do array;
    function soma ($a,$b){
        return $a + $b;
    }
    echo $res = array_reduce($arr, "soma"), "<br><br>";