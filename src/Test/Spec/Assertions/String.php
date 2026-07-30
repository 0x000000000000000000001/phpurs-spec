<?php

$_startsWith = function ($subs, $str) use (&$_startsWith) {
    return str_starts_with($str, $subs);
};

$_endsWith = function ($subs, $str) use (&$_endsWith) {
    return str_ends_with($str, $subs);
};

$exports['_startsWith'] = $_startsWith;
$exports['_endsWith'] = $_endsWith;
return $exports;
