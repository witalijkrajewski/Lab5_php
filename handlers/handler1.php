<?php
function makeList($array) {
    $list = '<ul>';
    foreach ($array as $item) {
        $list .= '<li>' . $item . '</li>';
    }
    $list .= '</ul>';
    return $list;
}

$array = array("Item 1", "Item 2", "Item 3");
echo makeList($array);