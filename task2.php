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

</body>
</html>

<?php

// Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday.
// Your script should determine the number of days based on the current date.

function countdown($birthday){
    $date = date('d-m-Y'); // Дата на данный момент времени
    $bd = explode('-',$birthday); // разбивает строку по разделителю и возвращает массив строк
    $bdt = mktime(0,0,0, $bd[1], $bd[0], date('Y')); // раница между временем Unix
    // и днем, месяцем рождения с нынешним годом
    $cd = strtotime($date);
    if ($bdt < $cd){
        $bdt = mktime(0,0,0, $bd[1], $bd[0],date('Y') +1);
        echo ($cd - $bdt)/86400*-1;
    } else echo ($cd - $bdt)/86400*-1; // условие, если д.р. было в этом году

}
countdown("1-1-2003");
?>