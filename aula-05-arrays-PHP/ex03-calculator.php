<!DOCTYPE html>
<html>
<head>
    <title>Exercício 3</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<form method="POST">
    Número 1: <input type="number" name="num1"><br><br>
    Número 2: <input type="number" name="num2"><br><br>

    Operação:
    <select name="operacao">
        <option value="+">Soma</option>
        <option value="-">Subtração</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
    </select><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
function soma($a, $b) { return $a + $b; }
function sub($a, $b) { return $a - $b; }
function mult($a, $b) { return $a * $b; }
function div($a, $b) {
    return $b == 0 ? "Erro: divisão por zero" : $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $op = $_POST["operacao"];

    if ($op == "+") {
        $resultado = soma($n1, $n2);
    } elseif ($op == "-") {
        $resultado = sub($n1, $n2);
    } elseif ($op == "*") {
        $resultado = mult($n1, $n2);
    } elseif ($op == "/") {
        $resultado = div($n1, $n2);
    } else {
        $resultado = "Operação inválida";
    }

    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>