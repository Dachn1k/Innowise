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
function foo1(int $number)
{
    if ($number > 30) {
        return "More than 30";
    }
    if ($number > 20 && $number <= 30) {
        return "More than 20";
    }
    if ($number > 10 && $number <= 20) {
        return "More than 10";
    }
    if ($number <= 10) {
        return "Equal or less than 10";
    }

    return $number;
}

echo foo1(31);
function foo2(int $number)
{
    switch (true) {
        case $number > 30:
            return "More than 30";
        case $number > 20 && $number <= 30:
            return "More than 20";
        case $number > 10 && $number <= 20:
            return "More than 10";
        case $number <= 10:
            return "Equal or less than 10";
    }

    return $number;
}

echo foo2(5);

function foo3(int $number)
{
    return $number > 30
        ? 'More than 30'
        : ($number > 20
            ? 'More than 20'
            : ($number > 10
                ? 'More than 10'
                : ($number <= 10
                    ? 'Equal or less than 10'
                    : "")));


}

echo foo3(1);
?>
</body>
</html>


