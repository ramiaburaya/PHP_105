<?php

declare(strict_types=1);

echo "<h1>PHP Default Argument Value</h1>";

function setHeight(int $minHeight = 150)
{
    if ($minHeight != 150) {
        echo "The min height is = " . $minHeight . "<br><hr>";
    } else {
        echo "The min height is   (Default value) =" . $minHeight . "<br><hr>";
    }
}


setHeight(350);

setHeight(200);

setHeight();

setHeight(800);
