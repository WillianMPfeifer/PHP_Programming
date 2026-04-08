<!DOCTYPE html>
<html>
<head>
    <title>Exercício 5</title>
</head>
<body>

<h2>Análise de Vetor</h2>

<form method="POST">
    <input type="submit" value="Gerar Vetor">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Criar vetor
    $vetor = [];

    for ($i = 0; $i < 20; $i++) {
        $vetor[] = rand(1, 100);
    }

    // Maior e menor
    $maior = max($vetor);
    $menor = min($vetor);

    // Média
    $media = array_sum($vetor) / count($vetor);

    // Contar pares
    $pares = 0;

    foreach ($vetor as $num) {
        if ($num % 2 == 0) {
            $pares++;
        }
    }

    $percentual = ($pares / count($vetor)) * 100;

    // Mostrar vetor
    echo "<h3>Vetor:</h3>";
    foreach ($vetor as $v) {
        echo $v . " ";
    }

    // Resultados
    echo "<h3>Maior: $maior</h3>";
    echo "<h3>Menor: $menor</h3>";
    echo "<h3>Média: $media</h3>";
    echo "<h3>% de pares: $percentual%</h3>";
}
?>

</body>
</html>