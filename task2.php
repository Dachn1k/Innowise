
<?php

// Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday.
// Your script should determine the number of days based on the current date.

function countdown(string $birthday):int
{
    define('TIME', 86400);
    $date = date('d-m-Y'); // Дата на данный момент времени
    $bd = explode('-', $birthday); // разбивает строку по разделителю и возвращает массив строк
    list($day, $month,) = $bd;
    $bdt = mktime(0, 0, 0, $day, $month, date('Y')); // раница между временем Unix
    // и днем, месяцем рождения с нынешним годом
    $cd = strtotime($date);
    if ($bdt < $cd) {
        $bdt = mktime(0, 0, 0, $day, $month, date('Y') + 1);
        return ($cd - $bdt) / TIME * -1;
    } else return ($cd - $bdt) / TIME * -1; // условие, если д.р. было в этом году

}

echo countdown("1-1-2003");
?>




