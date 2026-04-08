<!DOCTYPE html>
<html>
<head>
    <title>Exercício 2</title>
</head>
<body>

<h2>Contar ocorrências de caractere</h2>

<form method="POST">
    String: <input type="text" name="string"><br><br>
    Caractere: <input type="text" name="char" maxlength="1"><br><br>

    <input type="submit" value="Contar">
</form>

<?php
function contar($string, $char) {
    $contador = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (substr($string, $i, 1) === $char) {
            $contador++;
        }
    }

    return $contador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];
    $char = $_POST["char"];

    $resultado = contar($string, $char);

    echo "<h3>Ocorrências: $resultado</h3>";
}
?>

</body>
</html>