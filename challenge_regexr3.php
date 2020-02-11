<?php

declare(strict_types=1);

function zOrQ($word):bool{
    return preg_match("/[QqZz]/",$word)===1;
}

var_dump(zOrQ("blah")); // bool(false)
var_dump(zOrQ("blqh")); // bool(true)
var_dump(zOrQ("bZ3h5")); // bool(true)
var_dump(zOrQ("bz3h5")); // bool(true)

// Create a function, zOrQ, that returns true if the given string contains the letter q or z (uppercase and lowercase):