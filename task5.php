<?php

function digitSequence(int $number1, int $number2): void
{
    if ($number1 > $number2) {
        echo $number1-- . ',';
        digitSequence($number1, $number2);
        if ($number2 === $number1) {
            echo $number1++;
        }
    } elseif ($number1 < $number2) {
        echo $number1++ . ',';
        digitSequence($number1, $number2);
        if ($number2 === $number1) {
            echo $number1++;
        }
    }
}
digitSequence(7, 1);
