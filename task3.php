<?php
function foo(int $input): int
{
    $process = [];
    for ($i = strlen($input); $i >= 1; $i--) {
        $input = array_sum(str_split($input));
        $process[]= $input;

    }
    print_r($process);
    return $input;
}

echo foo(5786940);
?>