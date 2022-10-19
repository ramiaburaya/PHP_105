<?php

declare(strict_types=1);

echo "<h1> PHP is a Loosely Typed Language</h1>";

function add(int $a, int $b)
{
    return $a + $b;
}

echo add(5, 5);
