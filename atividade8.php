<?php

echo "Digite um número inteiro positivo: ";
$numero = (int) readline();

if ($numero > 0) {
    echo "Os divisores de $numero são:\n";


    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "$i\n";
        }
    }
} else {
    echo "Por favor, insira um número inteiro positivo.\n";
}

