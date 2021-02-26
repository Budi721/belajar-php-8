<?php

function sayHello(string $first, $middle = "", $last): void
{
    echo "Hello, $first $middle $last" . PHP_EOL;
}

sayHello("Eko", "Kurniawan",  "Khannedy");
// PHP 8
sayHello(last: "Khannedy", first: "Eko", middle: "Kurniawan");
sayHello(first: "Eko", last: "Khannedy");