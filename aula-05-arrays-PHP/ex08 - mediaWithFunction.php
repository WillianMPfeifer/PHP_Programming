<!DOCTYPE html>
<html>
<head>
    <title>Exercício 8</title>
</head>
<body>

<h2>Média do Aluno (com função)</h2>

<form method="POST">
    Notas (separadas por vírgula): <br>
    <input type="text" name="notas" placeholder="Ex: 7,8,6,9"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
// Função para calcular média
function calcularMedia($notas) {
    $soma = 0;

    foreach ($notas as $n) {
        $soma += $n;
    }

    return $soma / count($notas);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $entrada = $_POST["notas"];
    $notas = explode(",", $entrada);

    // Usa a função
    $media = calcularMedia($notas);

    // Situação
    if ($media >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo "<h3>Média: $media</h3>";
    echo "<h3>Situação: $situacao</h3>";
}
?>

</body>
</html>