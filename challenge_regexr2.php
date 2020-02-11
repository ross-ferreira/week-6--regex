<?php

declare(strict_types=1);

function mi5($srch){
    return preg_match("/[00]+\d/",$srch)===1;
}

var_dump(mi5("007")); // bool(true)
var_dump(mi5("oo8")); // bool(false)
var_dump(mi5("003")); // bool(true)
var_dump(mi5("M")); // bool(false)

// Create a function, mi5, that returns true if the given string is 00 followed by a digit: