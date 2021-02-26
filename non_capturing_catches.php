<?php

function validate(string $value) {
    if (trim($value) == ""){
        throw new Exception("Invalid string");
    }
}

try {
    validate("      ");
} catch (Exception){ // Tidak butuh memasukkan variable exception
    echo "Invalid" . PHP_EOL;
}

