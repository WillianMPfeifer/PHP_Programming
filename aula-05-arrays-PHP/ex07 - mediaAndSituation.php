<!DOCTYPE html>
<html>
<head>
    <title>Exercício 7</title>
</head>
<body>

<h2>Média do Aluno</h2>

<form method="POST">
    Notas (separadas por vírgula): <br>
    <input type="text" name="notas" placeholder="Ex: 7,8,6,9"><br><br>

    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pega as notas e transforma em array
    $entrada = $_POST["notas"];
    $notas = explode(",", $entrada);

    // Calcular média
    $soma = 0;

    foreach ($notas as $n) {
        $soma += $n;
    }

    $media = $soma / count($notas);

    // Verificar situação
    if ($media >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    // Mostrar resultado
    echo "<h3>Média: $media</h3>";
    echo "<h3>Situação: $situacao</h3>";
}
?>

</body>
</html>