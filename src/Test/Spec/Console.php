<?php

$exports['write'] = function($s) {
    return function() use ($s) {
        echo $s;
    };
};

return $exports;
