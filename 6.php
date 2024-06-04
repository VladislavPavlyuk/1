Задание 6.
Разработать скрипт, который будет разбивать число на цифры, считать их количество, находить самую
большую, самую маленькую цифру в числе, считать сумму цифр, среднее значение.

<?php

function analyzeNumber($number) {
    // Разбиваем число на цифры
    $digits = str_split($number);

    // Считаем количество цифр
    $count = count($digits);

    // Находим самую большую и самую маленькую цифру
    $maxDigit = max($digits);
    $minDigit = min($digits);

    // Считаем сумму цифр
    $sum = array_sum($digits);

    // Считаем среднее значение
    $average = $sum / $count;

    // Возвращаем результаты
    return [
        'count' => $count,
        'maxDigit' => $maxDigit,
        'minDigit' => $minDigit,
        'sum' => $sum,
        'average' => $average,
    ];
}

$number = pi();
$result = analyzeNumber($number);

echo "<br><br>Число: $number<br>";
echo "Количество цифр: {$result['count']}<br>";
echo "Самая большая цифра: {$result['maxDigit']}<br>";
echo "Самая маленькая цифра: {$result['minDigit']}<br>";
echo "Сумма цифр: {$result['sum']}<br>";
echo "Среднее значение: {$result['average']}<br>";
?>

