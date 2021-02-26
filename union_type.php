<?php

class Example {
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = 1;
$example->data = "Data";
$example->data = true;
$example->data = [];

# Pada Argument Fungsi
function sampleFunction(string|array $data): string|array
{
    if (is_array($data)) {
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

echo sampleFunction("String") . PHP_EOL;
var_dump(sampleFunction(["Array"]));



