<?php

function testMixed(mixed $data): mixed
{
    if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "Eko";
    } else if (is_numeric($data)) {
        return 1;
    } else {
        return null;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("String"));
var_dump(testMixed(new stdClass()));
var_dump(testMixed(2));

