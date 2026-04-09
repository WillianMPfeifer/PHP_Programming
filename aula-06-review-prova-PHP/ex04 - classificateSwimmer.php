<?php

$nadadores = [
    ["nome" => "Ana",      "idade" => 8],
    ["nome" => "Bruno",    "idade" => 12],
    ["nome" => "Carlos",   "idade" => 20],
    ["nome" => "Diana",    "idade" => 6],
    ["nome" => "Eduardo",  "idade" => 15],
    ["nome" => "Fernanda", "idade" => 25],
    ["nome" => "Gabriel",  "idade" => 9],
    ["nome" => "Helena",   "idade" => 17],
    ["nome" => "Igor",     "idade" => 30],
    ["nome" => "Julia",    "idade" => 7],
    ["nome" => "Kevin",    "idade" => 13],
    ["nome" => "Laura",    "idade" => 22],
    ["nome" => "Marcos",   "idade" => 10],
    ["nome" => "Nina",     "idade" => 16],
    ["nome" => "Otto",     "idade" => 18],
];

$infantil = [];
$juvenil  = [];
$senior   = [];

foreach ($nadadores as $nadador) {
    $idade = $nadador["idade"];
    $nome  = $nadador["nome"];

    if ($idade >= 5 && $idade <= 10) {
        $infantil[] = $nome;
    } elseif ($idade >= 11 && $idade <= 17) {
        $juvenil[] = $nome;
    } elseif ($idade >= 18) {
        $senior[] = $nome;
    }
}

// a) Quantidade por categoria
echo "=== Quantidade por categoria ===\n";
echo "Infantil: " . count($infantil) . " nadadores\n";
echo "Juvenil: "  . count($juvenil)  . " nadadores\n";
echo "Sênior: "   . count($senior)   . " nadadores\n";

// b) Nome dos nadadores por categoria
echo "\n=== Nadadores por categoria ===\n";
echo "Infantil: " . implode(", ", $infantil) . "\n";
echo "Juvenil: "  . implode(", ", $juvenil)  . "\n";
echo "Sênior: "   . implode(", ", $senior)   . "\n";