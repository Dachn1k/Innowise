<?php
$string = "              The quick-brown_fox jumps over the_lazy-dog       ";
function stringTransform(string $string):string
{
    $separators = [" ", "-", "_"];
    $letterUpString = ucwords($string, " _-");

    return  str_replace( $separators, "", $letterUpString);
}
echo stringTransform($string);
