<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = (int)$_GET['a'];
    $b = (int)$_GET['b'];

    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $b != 0 ? $a / $b : 'Неможливо ділити на нуль';

    echo "<p>Сума: $a + $b = $sum</p>";
    echo "<p>Добуток: $a * $b = $product</p>";
    echo "<p>Різниця: $a - $b = $difference</p>";
    echo "<p>Частка: $a / $b = $quotient</p>";
} else {
    echo "Будь ласка, задайте значення для 'a' і 'b' в адресному рядку. Наприклад: ?a=5&b=3";
}
?>