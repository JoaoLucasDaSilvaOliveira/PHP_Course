<?php

    $arr = [
        [1,2,3],
        [4,5,6]
    ];
    $arr[0][0] = "João";
    $arr[0][1] = 20;

    foreach ($arr as $k => $v) {
        foreach ($v as $k2 => $v2) {
            print_r("| {$arr[$k][$k2]} |");
        }
        echo "<br>";
    }