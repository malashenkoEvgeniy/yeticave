<?php
function format_sum ($number) {
    $sum = ceil($number);
    if ($sum < 1000) {
        return $sum . '<b class="rub">р</b>';
    }
    else {
        return number_format($sum, 0, '.', ' ') . '<b class="rub">р</b>';
    }
}

function renderTemplate ($file, $date) {
    if (is_file($file) && is_readable($file)) {
        ob_start();
        extract($date);
        require($file);
        return ob_get_clean();
    }
    else {
        return '';
    }
}
