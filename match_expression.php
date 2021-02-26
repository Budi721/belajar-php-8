<?php

$value = "A";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda Tidak Lulus";
        break;
    case "E":
        $result = "Anda Salah Jurusan";
        break;
    default:
        $result = "Nilai apakah itu ?";
}

echo $result . PHP_EOL;

$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Anda Salah Jurusan",
    default => "Nilai apakah itu ?"
};

echo $result . PHP_EOL;

/////////////////////////////////////////////////////////

$value = 90;

$result = match (true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result .PHP_EOL;

/////////////////////////////////////////////

$name = "Mr. Eko";

$result = match (true){
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mom",
    default => "Hello"
};

echo $result . PHP_EOL;