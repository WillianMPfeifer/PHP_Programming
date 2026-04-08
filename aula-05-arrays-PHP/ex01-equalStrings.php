<!DOCTYPE html>
<html>
<head>
    <title>Exercício 1</title>
</head>
<body>

<h2>Comparar Strings</h2>

<form method="POST">
    String 1: <input type="text" name="str1"><br><br>
    String 2: <input type="text" name="str2"><br><br>

    <input type="submit" value="Comparar">
</form>

<?php
function comparar($a, $b) {
    if ($a === $b) {
        return "Strings iguais";
    } else {
        return "Strings diferentes";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1 = $_POST["str1"];
    $s2 = $_POST["str2"];

    echo "<h3>" . comparar($s1, $s2) . "</h3>";
}
?>

</body>
</html>