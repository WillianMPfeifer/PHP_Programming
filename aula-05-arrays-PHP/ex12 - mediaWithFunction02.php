<!DOCTYPE html>
<html>
<head>
    <title>Exercício 12</title>
</head>
<body>

<h2>Soma e Média</h2>

<form method="POST">
    Número 1: <br>
    <input type="number" name="n1"><br><br>

    Número 2: <br>
    <input type="number" name="n2"><br><br>

    Número 3: <br>
    <input type="number" name="n3"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
// Função
function calcular($a, $b, $c) {
    $soma = $a + $b + $c;
    $media = $soma / 3;

    return [
        "soma" => $soma,
        "media" => $media
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $resultado = calcular($n1, $n2, $n3);

    echo "<h3>Soma: " . $resultado["soma"] . "</h3>";
    echo "<h3>Média: " . number_format($resultado["media"], 2) . "</h3>";
}
?>

</body>
</html>