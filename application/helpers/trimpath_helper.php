<?php
defined('BASEPATH') or exit('No direct script access allowed');


function trimpath($path)
{
    $occur = 'uploads/';
    $occur_l = strlen($occur);
    $pos = strpos($path, $occur) + $occur_l;
    $path = substr($path, $pos);
    return $path;
}
