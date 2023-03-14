<?php

$first_number = (int)$_POST['first_number'];
$second_number = (int)$_POST['second_number'];
function tabl($a, $b)
{
// Проверка входных параметров
    if (!is_int($a) || !is_int($b)) {
        echo "Ошибка: параметры должны быть целыми числами";
        return;
    }

// Создание таблицы умножения
    echo "<table>";
    for ($i = 1; $i <= $a; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $b; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

tabl($first_number, $second_number);