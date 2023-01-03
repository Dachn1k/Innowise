<?php

function digitSequence(int $number1, int $number2):void
{
    if ($number1 > $number2) {
        echo $number1-- . ',';
        digitSequence($number1, $number2);

        
    }elseif ($number1 < $number2) {
        echo $number1++ . ',';
        digitSequence($number1, $number2);
    } 
}
digitSequence(1, 7);
