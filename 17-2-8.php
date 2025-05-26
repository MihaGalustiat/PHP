<?php
echo "Введите шестизначное натуральное число: ";
$number = trim(fgets(STDIN));

if (strlen($number) != 6) {
    echo "Ошибка: Число должно быть шестизначным.\n";
    exit(1);
}

$digitThousands = $number[3];  // Индексация с 0: 0 1 2 3 4 5
$digitTens = $number[4];        // Десятки - это предпоследняя цифра

$sum = intval($digitThousands) + intval($digitTens);

echo "Цифра тысяч: " . $digitThousands . "\n";
echo "Цифра десятков: " . $digitTens . "\n";
echo "Сумма: " . $sum . "\n";
?>
