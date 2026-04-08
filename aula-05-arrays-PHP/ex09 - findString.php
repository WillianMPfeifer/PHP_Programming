<!DOCTYPE html>
<html>
<head>
    <title>Exercício 9</title>
</head>
<body>

<h2>Buscar Fruta no Vetor</h2>

<form method="POST">
    Digite a fruta: <br>
    <input type="text" name="fruta"><br><br>

    <input type="submit" value="Buscar">
</form>

<?php
$frutas = ["Maçã", "Banana", "Pera", "Uva"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $busca = $_POST["fruta"];

    // procura no array
    if (array_search($busca, $frutas) !== false) {
        echo "<h3>String encontrada</h3>";
    } else {
        echo "<h3>String não encontrada</h3>";
    }
}
?>

</body>
</html>