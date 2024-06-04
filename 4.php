Задание 4.
В банке открыли депозит под 20% годовых. На депозит положили 300 единиц. Какая сумма единиц будет
через 20 лет? Какая будет прибыль? Вывести в таблицесумму и прибыль за каждый год.

<?php
echo '<table border="1">';
$start = 300.00;
echo '<td>Year</td><td>Start</td><td>End</td><td>Profit</td>';

for ($tr = 1; $tr <= 20; $tr++) {
    echo '<tr>';   
        $profit = round($start*0.2, 2);
        $end = $start + $profit;
        echo '<td>' . $tr . '</td><td>' . $start . '</td><td>' . $end . '</td><td>' . $profit . '</td>';
        $start = $end;
    echo '</tr>';
}
echo '</table>';
?>