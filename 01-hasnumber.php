<?php

// Create a function hasNumber, that returns true if the given string contains a digit.

declare(strict_types=1);

function hasNumber(string $str) : bool {
    // … your code here
}

var_dump(hasNumber("blah")); // bool(false)
var_dump(hasNumber("bl3h")); // bool(true)
var_dump(hasNumber("bl3h5")); // bool(true)