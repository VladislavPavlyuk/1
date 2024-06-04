Задание 5.
Вывести число задом наперед (347689 -> 986743)

<?php

function reverseNumberWithoutStrrev($number) {
  $number_str = (string)$number;
  $reversed_number = '';
  for ($i = strlen($number_str) - 1; $i >= 0; $i--) {
      $reversed_number .= $number_str[$i];
  }
  return $reversed_number;
}

$number = '347689';
echo "<br>$number<br>";
echo reverseNumberWithoutStrrev($number); 


?>