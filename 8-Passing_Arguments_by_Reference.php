<?php

declare(strict_types=1); // enable strict data type for function

echo "<h1>Passing Arguments by Reference</h1>";

function addTwo(&$value) // call by Reference
{
    $value += 2;
    echo "Value is (From funcion) = " . $value . "<br><br>";
}

$number = 10;

echo "Value is (Before calling Function) = " . $number . "<br><br>";
addTwo($number);

echo "Value is (After calling Function) = " . $number . "<br><br>";
