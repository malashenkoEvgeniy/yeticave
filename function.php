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

function esc($str) {
   return strip_tags($str);
} 

function get_time () {
  date_default_timezone_set("Europe/Moscow");
  $date=  mktime(23, 59, 59)-time();
  $hour=($date-$date%3600)/3600;
  $el = $date%3600;
  $min= floor($el/60);
  return $hour.' : '.$min;
}