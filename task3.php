
<?php
function foo(int $input):int
{
    $output = 0;
    while ($input > 0 || $output > 9) {
        if($input == 0) {
            $input = $output;
            $output = 0;
        }
        $output += $input % 10;
        $input = (int)$input / 10;

    }
    return $output;

}

echo foo(9999);
?>



