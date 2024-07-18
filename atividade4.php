<?php

$num = (int)readline("Digite seu numero:");

for ($i = 1; $i <= $numero; $i++) {
    $soma += $i;
}

if ($numero > 0) {
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }

    echo "A soma de todos os números entre 1 e $numero é: " . $soma . "\n";
} else {
    echo "Por favor, insira um número inteiro positivo.\n";
}


