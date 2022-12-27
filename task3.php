<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function foo(int $input)
{
    $output = 0;
    while ($input > 0 || $output > 9){
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

</body>
</html>


