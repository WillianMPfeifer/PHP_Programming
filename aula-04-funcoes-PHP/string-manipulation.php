<?php
// 9. Inverter String (utilizando substr e strlen conforme Aula 04)
function inverteString($string) {
    $invertida = "";
    $tamanho = strlen($string);
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $invertida .= substr($string, $i, 1);
    }
    return $invertida;
}

// 10. Palíndromo
function isPalindromo($palavra) {
    // strcasecmp ignora maiúsculas/minúsculas ao comparar
    $palavraInvertida = inverteString($palavra);
    if (strcasecmp($palavra, $palavraInvertida) === 0) {
        return true;
    }
    return false;
}

// 11. Classificação Escolar
function classificaAluno($nota) {
    if ($nota >= 7) return "Aprovado";
    if ($nota >= 5 && $nota < 7) return "Recuperação";
    return "Reprovado";
}

// 12. FizzBuzz (1 a 100)
function fizzBuzz() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo $i . "\n";
        }
    }
}

// 13. Calcular a Idade (usando date() da Aula 04)
function calculaIdade($anoNascimento) {
    $anoAtual = date("Y"); // Pega o ano atual do servidor
    return $anoAtual - $anoNascimento;
}

// test area

// echo "A palavra " .. " invertida fica: ". inverteString($string);

// echo "Validando se a palavra " .. " é um Palindromo: ". isPalindromo($palavra);

// echo "Se o aluno tirar " .. " então está classificado como:" . classificaAluno($nota);

// echo "Não sei o que é esse Fizz Buzz mas o retorno dele é: ". fizzBuzz()

// echo "Se tu nasceu em: " .. " Então tua idade é: "; 


?>