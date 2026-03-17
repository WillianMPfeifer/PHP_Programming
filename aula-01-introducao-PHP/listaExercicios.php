<?php
// ATIVIDADE 01

echo "\n ATIVIDADE 01 \n";

$variableA = 10;

$variableB = 20;

$newVariableB = $variableA;

$newVariableA = $variableB;


echo "A antiga variável A tinha o valor de $variableA e agora tem o valor de $newVariableA e a
antiga variavel B tinha o valor de $variableB e agora tem o valor de $newVariableB, Legal!!
\n ";
 
// ATIVIDADE 02

echo "\n ATIVIDADE 02 \n";

// EXERCÍCIO A)

echo "\n=== EXERCÍCIO A) ===\n";
 
$A = 10;
$B = 20;
 
echo "B = $B\n"; 
$B = 5;
 
echo "A = $A, B = $B\n"; 
 
// EXERCÍCIO B)

echo "\n=== EXERCÍCIO B) ===\n";
 
$A = 30;
$B = 20;
$C = $A + $B;
 
echo "C = $C\n"; 
$B = 10;
 
echo "B = $B, C = $C\n";
$C = $A + $B;
 
echo "A = $A, B = $B, C = $C\n"; 
 
// EXERCÍCIO C)

echo "\n=== EXERCÍCIO C) ===\n";
 
$A = 10;
$B = 20;
$C = $A;   // C ← A  → C = 10
$B = $C;   // B ← C  → B = 10
$A = $B;   // A ← B  → A = 10
 
echo "A = $A, B = $B, C = $C\n"; 
 
// EXERCÍCIO D)
 
echo "\n=== EXERCÍCIO D) ===\n";
 
$A = 10;
$B = $A + 1;  // B = 11
$A = $B + 1;  // A = 12
$B = $A + 1;  // B = 13
 
echo "A = $A\n"; 
$A = $B + 1;  // A = 14
 
echo "A = $A, B = $B\n"; 
 
// EXERCÍCIO E)
 
echo "\n=== EXERCÍCIO E) ===\n";
 
$A = 10;
$B = 5;
$C = $A + $B;  // C = 15
$B = 20;
$A = 10;
 
echo "A = $A, B = $B, C = $C\n"; 
 
// EXERCÍCIO F)
 
echo "\n=== EXERCÍCIO F) ===\n";
 
$X = 1;
$Y = 2;
$Z = $Y - $X;  // Z = 1
 
echo "Z = $Z\n"; // Escrever Z
 
$X = 5;
$Y = $X + $Z;  // Y = 6
 
echo "X = $X, Y = $Y, Z = $Z\n";
 
echo "\n";


?>