<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4</title>
</head>
<body>

<h2>Vetor e Números Pares</h2>

<form method="POST">
    <input type="submit" value="Gerar Vetor">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Vetor A
    $A = [];

    for ($i = 0; $i < 10; $i++) {
        $A[] = rand(1, 10);
    }

    // Vetor de pares
    $pares = [];

    foreach ($A as $num) {
        if ($num % 2 == 0) {
            $pares[] = $num;
        }
    }

    // Mostrar vetor A
    echo "<h3>Vetor A:</h3>";
    foreach ($A as $n) {
        echo $n . " ";
    }

    // Mostrar pares
    echo "<h3>Números pares:</h3>";
    foreach ($pares as $p) {
        echo $p . " ";
    }
}
?>

</body>
</html>