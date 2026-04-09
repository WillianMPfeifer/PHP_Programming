<?php

// Matriz 6x4: [Produto, Unidades, Preço Unitário, Preço Total]
$matriz = [
    ["Produto 1", 200, 10.00, 2000.00],
    ["Produto 2", 100, 10.50, 1050.00],
    ["Produto 3", 100, 11.00, 1100.00],
    ["Produto 4", 100, 12.00, 1200.00],
    ["Produto 5", 300, 14.00, 4200.00],
    ["Produto 6", 200, 15.00, 3000.00],
];

// a) Total de unidades, preço unitário e preço total do Produto 4
echo "=== a) Produto 4 ===\n";
$produto4 = $matriz[3]; // índice 3 = Produto 4
echo "Total de unidades: " . $produto4[1] . "\n";
echo "Preço unitário: R$ " . number_format($produto4[2], 2, ',', '.') . "\n";
echo "Preço total: R$ "    . number_format($produto4[3], 2, ',', '.') . "\n";

// b) Produto mais comprado (maior número de unidades)
echo "\n=== b) Produto mais comprado ===\n";
$maior_unidades = $matriz[0];
foreach ($matriz as $produto) {
    if ($produto[1] > $maior_unidades[1]) {
        $maior_unidades = $produto;
    }
}
echo "Produto: " . $maior_unidades[0] . "\n";
echo "Unidades: " . $maior_unidades[1] . "\n";

// c) Produto com maior preço unitário
echo "\n=== c) Produto mais caro por unidade ===\n";
$maior_preco = $matriz[0];
foreach ($matriz as $produto) {
    if ($produto[2] > $maior_preco[2]) {
        $maior_preco = $produto;
    }
}
echo "Produto: " . $maior_preco[0] . "\n";
echo "Preço unitário: R$ " . number_format($maior_preco[2], 2, ',', '.') . "\n";

// d) Média de unidades compradas
echo "\n=== d) Média de unidades compradas ===\n";
$total_unidades = 0;
foreach ($matriz as $produto) {
    $total_unidades += $produto[1];
}
$media = $total_unidades / count($matriz);
echo "Total de unidades: $total_unidades\n";
echo "Total de produtos: " . count($matriz) . "\n";
echo "Média: " . number_format($media, 2, ',', '.') . " unidades\n";