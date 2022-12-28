<?php
$arr = [1,2,3,4,5];
function foo(array $arr, int $position):array
{
    array_splice($arr, $position, 1);
    return $arr;
}
foo($arr, 4);
