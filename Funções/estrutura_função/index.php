<?php

function doQueEuQuiser ($n1,$n2,$n3)
{
    $n1 = $n2 - $n3;
    return $n1;
}

var_dump(doQueEuQuiser(10, 20, 30));