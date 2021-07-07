<?php
defined('BASEPATH') or exit('No direct script access allowed');


function textlim($text, $size)
{
    $occur = array('<p>', '</p>');
    $number_of = array();
    $new_text = $text;
    $new_size = $size;
    for ($i = 0; $i < count($occur); $i++) {
        $new_text = str_replace($occur[$i], "", $new_text, $number_of[$i]);
        $new_size = $new_size + (strlen($occur[$i]) * $number_of[$i]);
    }
    $lenght = strlen($new_text);
    if ($lenght > $size) {
        $text = substr($text, 0, $new_size) . '...' . '</p>';
    }
    return $text;
}
