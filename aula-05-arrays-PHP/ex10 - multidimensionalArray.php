<!DOCTYPE html>
<html>
<head>
    <title>Exercício 10</title>
</head>
<body>

<h2>Lista de Clientes</h2>

<form method="POST">
    <input type="submit" value="Mostrar Clientes">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Array multidimensional
    $clientes = [
        [
            "nome" => "João",
            "sobrenome" => "Silva",
            "sexo" => "M",
            "nascimento" => "2000-01-01"
        ],
        [
            "nome" => "Maria",
            "sobrenome" => "Oliveira",
            "sexo" => "F",
            "nascimento" => "1998-05-10"
        ],
        [
            "nome" => "Carlos",
            "sobrenome" => "Souza",
            "sexo" => "M",
            "nascimento" => "1995-03-20"
        ]
    ];

    // Mostrar dados
    foreach ($clientes as $c) {
        echo "<h3>";
        echo $c["nome"] . " " . $c["sobrenome"] . "<br>";
        echo "Sexo: " . $c["sexo"] . "<br>";
        echo "Nascimento: " . $c["nascimento"];
        echo "</h3>";
    }
}
?>

</body>
</html>