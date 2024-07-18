<?php

$somaPares = 0;


for ($i = 1; $i <= 100; $i++) {
    
    if ($i % 2 == 0) {
    
        $somaPares += $i;
    }
}


echo "A soma dos números pares entre 1 e 100 é: " . $somaPares . "\n";

