<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP Function Arguments</title>
</head>

<body>

    <?php

    function Add($num1, $num2)
    {
        echo "Adding <br>";
        echo "num1 + num2 = ";
        echo $num1 + $num2;
        echo "<br><hr>";
    }

    function Subtract($num1, $num2)
    {
        echo "Subtract <br>";

        echo "num1 - num2 = ";

        echo $num1 - $num2;
        echo "<br><hr>";
    }

    function Multi($num1, $num2)
    {
        echo "Multi <br>";

        echo "num1 * num2 = ";

        echo $num1 * $num2;
        echo "<br><hr>";
    }

    echo "Number 1 is = " . 10 . "<br>";
    echo "Number 1 is = " . 5 . "<br><hr>";

    Add(10, 5);
    Subtract(10, 5);
    Multi(10, 5);

    ?>




</body>

</html>