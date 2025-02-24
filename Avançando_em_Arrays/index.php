<?php

function maiorElemento ($arr) {
    rsort ($arr);
    return $arr[0];
}
$array = [
    1,2,3,4,5,6,7,8,9,10
];
echo maiorElemento($array), "<br><br>";
