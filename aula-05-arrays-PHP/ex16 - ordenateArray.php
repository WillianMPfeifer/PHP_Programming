<!DOCTYPE html>
<html>
<head>
    <title>Exercício 16</title>
</head>
<body>

<h2>Ordenar Array</h2>

<form method="POST">
    Digite números separados por vírgula:<br>
    <input type="text" name="numeros"><br><br>

    <input type="submit" value="Ordenar">
</form>

<?php
// Função para ordenar (crescente)
function ordenarArray($array) {

    $tamanho = count($array);

    // algoritmo simples (Bubble Sort)
    for ($i = 0; $i < $tamanho; $i++) {
        for ($j = 0; $j < $tamanho - 1; $j++) {

            if ($array[$j] > $array[$j + 1]) {
                // troca
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrada = $_POST["numeros"];

    // transforma em array de números
    $array = array_map('intval', explode(",", $entrada));

    $ordenado = ordenarArray($array);

    echo "<h3>Array ordenado:</h3>";

    foreach ($ordenado as $num) {
        echo $num . " ";
    }
}
?>

</body>
</html>