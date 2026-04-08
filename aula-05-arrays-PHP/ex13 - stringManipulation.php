<!DOCTYPE html>
<html>
<head>
    <title>Exercício 13</title>
</head>
<body>

<h2>Inverter String</h2>

<form method="POST">
    Digite um texto:<br>
    <input type="text" name="texto"><br><br>

    <input type="submit" value="Inverter">
</form>

<?php
// Função para inverter
function inverterString($texto) {
    $invertida = "";

    // percorre de trás pra frente
    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertida .= $texto[$i];
    }

    return $invertida;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $texto = $_POST["texto"];

    $resultado = inverterString($texto);

    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>