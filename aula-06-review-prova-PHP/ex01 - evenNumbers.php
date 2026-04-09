<?php

$limite_inferior = 1;
$limite_superior = 50;
$soma = 0;

echo "Intervalo: $limite_inferior até $limite_superior\n";
echo "Números pares: ";

for ($i = $limite_inferior; $i <= $limite_superior; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
        echo "$i ";
    }
}

echo "\nSoma dos pares: $soma\n";