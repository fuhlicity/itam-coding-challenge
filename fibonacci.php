<?php

function fibonacci($n) {
    $fib = [0, 1]; 

    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }

    return $fib[$n];
}

$n = 5;
$value = fibonacci($n);
echo 'f[' . $n . '] =' .$value;