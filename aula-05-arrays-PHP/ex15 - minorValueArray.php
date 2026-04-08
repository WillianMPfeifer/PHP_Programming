<!DOCTYPE html>
<html>
<head>
    <title>Exercício 15</title>
</head>
<body>

<h2>Menor valor do Array</h2>

<form method="POST">
    Digite números separados por vírgula:<br>
    <input type="text" name="numeros"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
// Função para encontrar menor valor
function menorValor($array) {
    $menor = $array[0];

    foreach ($array as $valor) {
        if ($valor < $menor) {
            $menor = $valor;
        }
    }

    return $menor;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrada = $_POST["numeros"];

    // transforma string em array
    $array = explode(",", $entrada);

    // chama função
    $resultado = menorValor($array);

    echo "<h3>Menor valor: $resultado</h3>";
}
?>

</body>
</html>