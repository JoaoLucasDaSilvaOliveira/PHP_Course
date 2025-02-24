<?php

    function multReturn ($nome, $idade) {
        $nome = "Sr {$nome}";
        $idade = "{$idade} anos";

        return [$nome, $idade];
    }
    print_r(multReturn("João", 20));
    $data = multReturn("João",20);
    echo "Olá $data[0], você tem, $data[1]";

    echo "<br><br>";
    function isPrime ($n) {
        if ($n < 2) {
            return false;
        }
        $acumula = 0;
        for ($i=1;$i<=$n;$i++) {
            if ($n % $i == 0) {
                $acumula++;
            }
        }
        if ($acumula > 2)
        {
            return false;
        } else {
            return true;
        }
    }
    echo isPrime(10);

