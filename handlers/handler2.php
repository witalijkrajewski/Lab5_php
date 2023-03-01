<?php
function applyTrigonometricFunction($numbers, $functionName)
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
applyTrigonometricFunction($numbers, 'sin');
applyTrigonometricFunction($numbers, 'cos');
applyTrigonometricFunction($numbers, 'tg');
applyTrigonometricFunction($numbers, 'ctg');

