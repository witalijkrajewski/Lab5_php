<?php

$first_number = (int)$_POST['first_number'];
$second_number = (int)$_POST['second_number'];
function createTable($first_number, $second_number)
{
// Проверка входных параметров
    if (!is_int($first_number) || !is_int($second_number)) {
        echo "Ошибка: параметры должны быть целыми числами";
        return;
    }

    if ($first_number == 0 || $second_number == 0) {
        echo 'Ошибка: оба параметра должны быть больше нуля!';
        return;
    }

// Создание таблицы умножения
    echo "<table>";
    for ($i = 1; $i <= $first_number; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $second_number; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

createTable($first_number, $second_number);