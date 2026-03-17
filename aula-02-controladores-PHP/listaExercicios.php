<?php
// EXERCÍCIO 1)

echo "\n=== EXERCÍCIO 1) ===\n";

$num1 = 4;
$num2 = 7;
$num3 = 12;
$num4 = 9;

$somaPares = 0;

if ($num1 % 2 == 0) {
    $somaPares = $somaPares + $num1;
}
if ($num2 % 2 == 0) {
    $somaPares = $somaPares + $num2;
}
if ($num3 % 2 == 0) {
    $somaPares = $somaPares + $num3;
}
if ($num4 % 2 == 0) {
    $somaPares = $somaPares + $num4;
}

echo "Números: $num1, $num2, $num3, $num4\n";
echo "Soma dos pares: $somaPares\n";


// EXERCÍCIO 2)

echo "\n=== EXERCÍCIO 2) ===\n";

for ($i = 200; $i >= 100; $i--) {
    echo "$i ";
}
echo "\n";


// EXERCÍCIO 3)

echo "\n=== EXERCÍCIO 3) ===\n";

$limiteInferior = 10;
$limiteSuperior = 20;

$somaPares = 0;

for ($i = $limiteInferior; $i <= $limiteSuperior; $i++) {
    if ($i % 2 == 0) {
        $somaPares = $somaPares + $i;
    }
}

echo "Intervalo: $limiteInferior a $limiteSuperior\n";
echo "Soma dos números pares: $somaPares\n";


// EXERCÍCIO 4)

echo "\n=== EXERCÍCIO 4) ===\n";

$str1 = "PHP";
$str2 = "php";

if (strcasecmp($str1, $str2) == 0) {
    echo "Strings iguais\n";
} else {
    echo "Strings diferentes\n";
}


// EXERCÍCIO 5)

echo "\n=== EXERCÍCIO 5) ===\n";

$valor = -7;

if ($valor > 0) {
    echo "$valor é positivo\n";
} elseif ($valor < 0) {
    echo "$valor é negativo\n";
} else {
    echo "O valor é zero\n";
}


// EXERCÍCIO 6)

echo "\n=== EXERCÍCIO 6) ===\n";

$nome  = "Ana";
$sexo  = "F";
$idade = 22;

if ($sexo == "F" && $idade < 25) {
    echo "$nome: ACEITA\n";
} else {
    echo "$nome: NÃO ACEITA\n";
}


// EXERCÍCIO 7)

echo "\n=== EXERCÍCIO 7) ===\n";

$valorRecebido = 9;

echo "Valor recebido: $valorRecebido\n";
echo "Impressão: ";

for ($i = 0; $i <= $valorRecebido; $i++) {
    echo "$i ";
}
echo "\n";


// EXERCÍCIO 8)

echo "\n=== EXERCÍCIO 8) ===\n";

$texto     = "legal programar em php em... gostei";
$caractere = "a";

$ocorrencias = substr_count($texto, $caractere);

echo "Texto: \"$texto\"\n";
echo "Caractere buscado: \"$caractere\"\n";
echo "Número de ocorrências: $ocorrencias\n";


// EXERCÍCIO 9)

echo "\n=== EXERCÍCIO 9) ===\n";

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Erro: divisão por zero!";
    }
    return $a / $b;
}

$valor1   = 10;
$valor2   = 4;
$operacao = "+"; // Trocar por conforme a necessidade: "+", "-", "*", "/"

echo "Valores: $valor1 e $valor2\n";
echo "Operação: $operacao\n";

if ($operacao == "+") {
    $resultado = somar($valor1, $valor2);
} elseif ($operacao == "-") {
    $resultado = subtrair($valor1, $valor2);
} elseif ($operacao == "*") {
    $resultado = multiplicar($valor1, $valor2);
} elseif ($operacao == "/") {
    $resultado = dividir($valor1, $valor2);
} else {
    $resultado = "Operação inválida!";
}

echo "Resultado: $resultado\n";

echo "\n";
