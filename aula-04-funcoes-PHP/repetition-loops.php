<?php
// 5. Soma de Números Pares (1 a 100)
function somaPares() {
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

// 6. Contagem Regressiva
function contagemRegressiva() {
    for ($i = 10; $i >= 0; $i--) {
        echo $i . "\n";
    }
}

// 7. Números Primos
function verificaEhPrimo($numero) {
    if ($numero < 2) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// 8. Fatorial
function calculaFatorial($numero) {
    if ($numero <= 1) return 1;
    $fatorial = 1;
    for ($i = $numero; $i > 1; $i--) {
        $fatorial *= $i;
    }
    return $fatorial;
}

// test area

echo "A soma dos numeros pares de 0 a 100 é". somaPares();

echo "Agora uma contagem regressiva de 10 a 0". contagemRegressiva();

echo "O numero " . $numero . " é:" . verificaEhPrimo(8);

echo "Fatorial do numero " . $numero . " é: " . calculaFatorial(10);

?>