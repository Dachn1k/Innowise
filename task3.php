<?php
function foo(int $input):int
{
    $array = array();
    for ($i=strlen($input); $i >= 1; $i--) { 
        $input = array_sum((str_split($input)));
        array_push($array, $input);
        
    }
    print_r($array);
    return $input;
}

echo foo(5786940);
?>


