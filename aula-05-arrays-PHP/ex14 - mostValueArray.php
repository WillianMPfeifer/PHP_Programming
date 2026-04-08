<!DOCTYPE html>
<html>
<head>
    <title>Exercício 14</title>
</head>
<body>

<h2>Maior valor do Array</h2>

<form method="POST">
    Digite números separados por vírgula:<br>
    <input type="text" name="numeros"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
// Função para encontrar maior valor
function maiorValor($array) {
    $maior = $array[0];

    foreach ($array as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }

    return $maior;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrada = $_POST["numeros"];

    // transforma string em array
    $array = explode(",", $entrada);

    // chama função
    $resultado = maiorValor($array);

    echo "<h3>Maior valor: $resultado</h3>";
}
?>

</body>
</html>