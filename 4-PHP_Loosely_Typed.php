<!DOCTYPE html>
<html lang="en">

<head>

    <title> PHP is a Loosely Typed Language</title>
</head>

<body>

    <?php

    declare(strict_types=1);
    echo "<h1> PHP is a Loosely Typed Language</h1>";

    function add(int $a, int $b)
    {
        return $a + $b;
    }

    echo add(5, "5 days");


    ?>
</body>

</html>