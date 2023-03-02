<?php
function make_list($array) {
    $list_tag = '<ul>';
    foreach ($array as $item) {
        $list_tag .= '<li>' . $item . '</li>';
    }
    $list_tag .= '</ul>';
    return $list_tag;
}

$array = array("Item 1", "Item 2", "Item 3");
echo make_list($array);