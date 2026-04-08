<?php

// Entrada de dados

$numeroParOuImpar = 10;
$numeroTabuada = 5;

$n1 = 3;
$n2 = 4;
$n3 = 5;

$idade = 80;


// 1. Par ou Ímpar
function verificaParOuImpar($numeroParOuImpar) {
    if ($numeroParOuImpar % 2 == 0) {
        return "Par";
    }
    return "Ímpar";
}


// 2. Maior de Três Números
function maiorDeTres($n1, $n2, $n3) {
    $maior = $n1;
    if ($n2 > $maior) $maior = $n2;
    if ($n3 > $maior) $maior = $n3;
    return $maior;
}

// 3. Faixa Etária
function verificaFaixaEtaria($idade) {
    if ($idade >= 0 && $idade <= 12) return "Criança";
    if ($idade >= 13 && $idade <= 17) return "Adolescente";
    if ($idade >= 18 && $idade <= 59) return "Adulto";
    if ($idade >= 60) return "Idoso";
    return "Idade inválida";
}

// 4. Tabuada
function exibeTabuada($numeroTabuada) {
    echo "Tabuada do $numeroTabuada:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numeroTabuada * $i;
        echo "$numeroTabuada x $i = $resultado\n";
    }
}

// test area
echo "O numero é" . verificaParOuImpar($finalNumber);
echo "O maior de 3" . maiorDeTres($n1, $n2, $n3);
echo "A idade se adequa a faixa etária: ". verificaFaixaEtaria($idade);
echo "A tabuada desse numero é: ". exibeTabuada($numeroTabuada);

?>