<?php
function apply_trigonometric_function($numbers, $functionName)
{
    $result = array();
    foreach ($numbers as $number) {
        switch ($functionName) {
            case 'sin':
                $result[] = sin($number);
                break;
            case 'cos':
                $result[] = cos($number);
                break;
            case 'tg':
                $result[] = tan($number);
                break;
            case 'ctg':
                $result[] = 1 / tan($number);
                break;
            default:
                return $numbers;
        }
    }
    echo '<ul>';
    foreach ($result as $value) {
        echo '<li>' . $value . '</li>';
    }
    echo '</ul>';
}

$numbers = array(3, 0.5, 1);
apply_trigonometric_function($numbers, 'sin');
apply_trigonometric_function($numbers, 'cos');
apply_trigonometric_function($numbers, 'tg');
apply_trigonometric_function($numbers, 'ctg');

