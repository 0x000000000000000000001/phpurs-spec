<?php

$unsafeStringify = function ($x) {
    return json_encode($x, JSON_PRETTY_PRINT);
};

$exports['unsafeStringify'] = $unsafeStringify;
return $exports;
