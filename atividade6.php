<?php

$entrada = readline( "Digite uma sequência de números inteiros separados por espaços: ");


$numeros = explode(" ", $entrada);


$maiorNumero = (int)$numeros[0];
foreach ($numeros as $numero) {
    $numero = (int)$numero;
    if ($numero > $maiorNumero) {
        $maiorNumero = $numero;
    }
}

echo "O maior número inserido é: " . $maiorNumero . "\n";
?>
