<?php
function calculateYWithFormulas($x) {
    $absX = abs($x);
    $root6 = pow($absX, 1/6);
    $cosRoot6 = cos($root6);
    $cosSquaredRoot6 = pow(cos($root6), 2);
    $arccos = acos($cosRoot6 / $cosSquaredRoot6);
    $arccosCubed = pow($arccos, 3);
    $tSquared = pow($x, 2); 
    $logPart = log(pow(3, $tSquared) + 2, 3);
    $sum = $arccosCubed + $logPart;
    $y = sqrt($sum);
    return $y;
}

function isInDomainD($x, $y) {
    return ($x >= 0 && $x <= 4) && ($y >= 0 && $y <= 5);
}

echo "Введите значение x: ";
$x = trim(fgets(STDIN));

if (!is_numeric($x)) {
    echo "Ошибка: Введено не числовое значение.\n";
    exit(1);
}

$x = floatval($x);
$yFormulas = calculateYWithFormulas($x);
$inDomainFormulas = isInDomainD($x, $yFormulas);

echo "1. С использованием формул преобразования:\n";
echo "   y(x) = " . number_format($yFormulas, 6) . "\n";
echo "   Принадлежит области D: " . ($inDomainFormulas ? 'True' : 'False') . "\n";

?>
