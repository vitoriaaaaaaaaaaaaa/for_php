<?php

function exibirTabuada($numero) {
    echo "Tabuada do número $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
    echo "\n"; 
}


for ($numero = 5; $numero <= 10; $numero++) {
    exibirTabuada($numero);
}

