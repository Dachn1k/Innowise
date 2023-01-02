<?php
$string = "https://innowise,com/";
function foo(string $string):string
{
    $pattern = "/^https?:\\/\\/?[-a-z0-9.]{1,256}\\.[a-z0-9()]{1,6}\\b(?:[-a-z0-9.\\/]*)$/";
    if (preg_match_all($pattern, $string)) {
        return "OK";
    }else {return "Not a valid URL";}


}
echo foo($string);