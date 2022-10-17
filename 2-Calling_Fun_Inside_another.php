<!DOCTYPE html>
<html lang="en">

<head>

    <title>Calling Functions Inside Functions </title>
</head>

<body>
    <?php

    echo "<h1>Calling Functions Inside Functions </h1>";

    function  PrintAddtionTableTwo() //function definition
    {
        echo "<mark>Hello Frineds :)</mark> <strong>From PrintAddtionTableTwo function Calling inside <mark>PrintMultiplicationTableTwo</mark> function </strong> <br><br>";
        for ($i = 0; $i <= 10; $i++) {
            $x = $i + 2;
            echo "$i + 2 = " . $x . "<br><br>";
        }
    }

    function PrintMultiplicationTableTwo() //function definition
    {
        PrintAddtionTableTwo(); // will excute if we Call PrintMultiplicationTableTwo function (Function calling)
        echo "<hr>";
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