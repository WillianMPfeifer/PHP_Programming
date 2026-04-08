<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
</head>
<body>

<h2>Matriz 5x5</h2>

<form method="POST">
    <input type="submit" value="Gerar Matriz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Criar matriz 5x5
    $matriz = [];

    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(1, 100);
        }
    }

    // Mostrar matriz
    echo "<h3>Matriz completa:</h3>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo $matriz[$i][$j] . " ";
        }
        echo "<br>";
    }

    // Separar pares e ímpares
    $pares = [];
    $impares = [];

    foreach ($matriz as $linha) {
        foreach ($linha as $num) {
            if ($num % 2 == 0) {
                $pares[] = $num;
            } else {
                $impares[] = $num;
            }
        }
    }

    // Mostrar pares
    echo "<h3>Números pares:</h3>";
    foreach ($pares as $p) {
        echo $p . " ";
    }

    // Mostrar ímpares
    echo "<h3>Números ímpares:</h3>";
    foreach ($impares as $i) {
        echo $i . " ";
    }
}
?>

</body>
</html>