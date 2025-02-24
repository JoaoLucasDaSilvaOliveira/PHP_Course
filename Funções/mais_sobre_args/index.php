<?php

    function nums ( $n1, $n2, $n3) {
        print_r(func_get_args());
        echo "<br>";
        print_r (func_num_args());
        echo "<br>";
    }

    nums(2,4,5);