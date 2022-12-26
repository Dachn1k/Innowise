<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

// Write a PHP functions to test whether a number is greater than 30, 20 or 10
// using a if conditions, switch and ternary operator.
function foo1($number)
{
    if ($number > 30)
        echo "More than 30 <br>";
    if ($number > 20 && $number <= 30)
        echo "More than 20 <br>";
    if ($number > 10 && $number <= 20)
        echo "More than 10 <br>";
    if ($number <= 10)
        echo "Equal or less than 10 <br>";
}
foo1(31);
function foo2($number){
    switch (true){
        case $number > 30:
            echo "More than 30 <br>";
            break;
        case $number > 20 && $number <= 30:
            echo "More than 20 <br>";
            break;
        case $number > 10 && $number <= 20:
            echo "More than 10 <br>";
            break;
        case $number <= 10:
            echo "Equal or less than 10 <br>";
            break;
    }

}
foo2(0);

function foo3($number){
    echo ($number > 30) ? "More than 30" : "";
    echo ($number > 20) ? "More than 20" : "";
    echo ($number > 10) ? "More than 10" : "";
    echo ($number <= 10) ? "Equal or less than 10" : "";
}
foo3(1);
?>
</body>
</html>