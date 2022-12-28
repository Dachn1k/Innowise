<?php

// Write a PHP functions to test whether a number is greater than 30, 20 or 10
// using a if conditions, switch and ternary operator.
function foo1(int $number):string
{
    $responseText = "";
    if ($number > 30) {
        $responseText = "More than 30";
    }
    if ($number > 20 && $number <= 30) {
        $responseText = "More than 20";
    }
    if ($number > 10 && $number <= 20) {
        $responseText = "More than 10";
    }
    if ($number <= 10) {
        $responseText = "Equal or less than 10";
    }

    return $responseText;
}

echo foo1(31);
function foo2(int $number):string
{
    $responseText = "";
    switch (true) {
        case $number > 30:
            $responseText = "More than 30";
            break;
        case $number > 20 && $number <= 30:
            $responseText = "More than 20";
            break;
        case $number > 10 && $number <= 20:
            $responseText = "More than 10";
            break;
        default:
            $responseText = "Equal or less than 10";
    }

    return $responseText;
}

echo foo2(11);

function foo3(int $number) :string
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