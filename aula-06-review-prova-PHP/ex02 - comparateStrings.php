<?php

function comparar_strings($string1, $string2) {
    if ($string1 == $string2) {
        echo "String 1 = String 2\n";
    } else {
        echo "Strings diferentes\n";
    }
}

// Simulando o recebimento do formulário Form_Strings.php
$string1 = "hello";
$string2 = "hello";
comparar_strings($string1, $string2);

$string1 = "PHP";
$string2 = "Java";
comparar_strings($string1, $string2);