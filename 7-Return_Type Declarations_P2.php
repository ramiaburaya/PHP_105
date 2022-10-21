<?php

declare(strict_types=1);

echo "<h1>PHP Return Type Declarations - Part2</h1>";

function AddNums(float $a, float $b): float
{
    return ($a + $b);
}

var_dump(AddNums(5.4, 11.5));

echo "the result is = " . AddNums(5.4, 11.5) . "<br><hr>";
#----------------------------------------------------------------
var_dump(AddNums(11.2, 8.5));

echo "the result is = " . AddNums(11.2, 8.5) . "<br><hr>";
