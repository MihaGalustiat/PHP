<?php
function calculateY($x) {
    if ($x <= 1) {
        $term1 = pow(7, $x);
        $term2 = pow(abs($x - 3), 7);
        $value = $term1 - $term2;
        if ($value <= 0) {
            return "Не определено (логарифм от неположительного числа)";
        }
        return log($value, 7);
    } elseif ($x > 1 && $x < 3) {
        $numerator = pow($x, 8);
        $denominator = 1 + pow($x, 2);
        if ($denominator == 0) {
            return "Не определено (деление на ноль)";
        }
        $fraction = $numerator / $denominator;
        if ($fraction <= 0) {
            return "Не определено (логарифм от неположительного числа)";
        }
        return log($fraction);
    } else {
        $denominator = 1 + pow($x, 2);
        $argument = $x / $denominator;
        if (abs($argument) > 1) {
            return "Не определено (аргумент arcsin вне [-1, 1])";
        }
        return asin($argument);
    }
}

echo "Введите значение x: ";
$x = trim(fgets(STDIN));


$x = floatval($x);
$result = calculateY($x);

echo "y($x) = " . (is_numeric($result) ? number_format($result, 15) : $result) . "\n";
?>
