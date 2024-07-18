<?php

$palavra = readline("Digite sua palavra:");

for ($i = 0; $i < strlen($palavra); $i++) {
    echo $palavra[$i] . "\n";
}