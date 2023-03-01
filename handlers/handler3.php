<?php
function sum_odd_numbers($start, $end) {
    if ($start > $end) {
        return 0;
    }
    else {
        $sum = ($start % 2 == 1) ? $start : 0;
        return $sum + sum_odd_numbers($start + 1, $end);
    }
}


$sum = sum_odd_numbers(10, 35);
echo "Result: $sum";