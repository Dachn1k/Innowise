<?php
$string = "              The quick-brown_fox jumps over the_lazy-dog       ";
function foo(string $string):string{
    $searchItems = [" ", "-", "_"];
    trim($string);
    $letterUpString = ucwords($string, " _-");
    return  str_replace( $searchItems, "", $letterUpString);
}
echo foo($string);
