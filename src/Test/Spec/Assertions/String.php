<?php

$_startsWith = function ($subs, $str = null) use (&$_startsWith) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function (...$more) use ($__args, &$_startsWith) {
            return $_startsWith(...array_merge($__args, $more));
        };
    }
    return str_starts_with($str, $subs);
};

$_endsWith = function ($subs, $str = null) use (&$_endsWith) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function (...$more) use ($__args, &$_endsWith) {
            return $_endsWith(...array_merge($__args, $more));
        };
    }
    return str_ends_with($str, $subs);
};

$exports['_startsWith'] = $_startsWith;
$exports['_endsWith'] = $_endsWith;
return $exports;
