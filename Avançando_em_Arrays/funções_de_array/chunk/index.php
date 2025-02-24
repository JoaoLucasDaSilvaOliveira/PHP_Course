<?php
    header("Content-type: Application/json");
    $arr = range(0,11);
    print_r (array_chunk($arr, 4));
    echo "<br>";