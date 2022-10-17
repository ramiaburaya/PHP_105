<!DOCTYPE html>
<html lang="en">

<head>

    <title>PHP Function</title>
</head>

<body>

    <?php

    echo "<h1>PHP Function : Built in Function, user defined Function</h1>";

    function PrintMultiplicationTableTwo() //function definition
    {
        echo "Print Multiplication Table Two : Start" . "<br><br>";

        for ($i = 0; $i <= 10; $i++) {
            echo "$i * 2 = " . $i * 2 . "<br><br>";
        }

        echo "Print Multiplication Table Two : Done" . "<br>";
    }


    echo "<hr>";
    PrintMultiplicationTableTwo(); //Function name not Case-sensitive (Function calling)
    echo "<hr>";
    ?>
</body>

</html>