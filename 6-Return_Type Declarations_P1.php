<?php

declare(strict_types=1);

echo "<h1>PHP Return Type Declarations - Part1</h1>";

function AddNums(float $a, float $b): float
{
    return $a + $b;
}

echo "the result is = " . AddNums(5.6, 11.5) . "<br><hr>";

echo "the result is = " . AddNums(10, 8.5) . "<br><hr>";
