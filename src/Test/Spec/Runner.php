<?php

$exports['exit'] = function($code) {
    return function() use ($code) {
        exit($code);
    };
};

return $exports;
