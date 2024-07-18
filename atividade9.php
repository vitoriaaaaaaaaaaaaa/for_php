<?php

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}


echo "Números primos entre 1 e 100:\n";
for ($i = 1; $i <= 100; $i++) {
    if (ehPrimo($i)) {
        echo $i . " ";
    }
}
echo "\n";
?>
