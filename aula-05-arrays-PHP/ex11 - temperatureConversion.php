<!DOCTYPE html>
<html>
<head>
    <title>Exercício 11</title>
</head>
<body>

<h2>Conversor de Temperatura</h2>

<form method="POST">
    Temperatura: <br>
    <input type="number" name="temp"><br><br>

    Tipo de conversão:<br>
    <select name="opcao">
        <option value="1">Celsius → Fahrenheit</option>
        <option value="2">Fahrenheit → Celsius</option>
    </select><br><br>

    <input type="submit" value="Converter">
</form>

<?php
// Funções
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}

function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $temp = $_POST["temp"];
    $opcao = $_POST["opcao"];

    if ($opcao == 1) {
        $resultado = celsiusParaFahrenheit($temp);
        echo "<h3>Resultado: $resultado °F</h3>";
    } elseif ($opcao == 2) {
        $resultado = fahrenheitParaCelsius($temp);
        echo "<h3>Resultado: $resultado °C</h3>";
    } else {
        echo "<h3>Opção inválida</h3>";
    }
}
?>

</body>
</html>