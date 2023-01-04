<?php

// Create a simple 'birthday countdown' script, the script counts the number of days left until the person’s birthday.
// Your script should determine the number of days based on the current date.

function countdown(string $birthday):int
{
    define('TIME', 86400);
    $date = date('d-m-Y'); // Дата на данный момент времени
    $birthday= explode('-', $birthday); // разбивает строку по разделителю и возвращает массив строк
    list($day, $month,) = $birthday;
    $birthdayTime = mktime(0, 0, 0, $month, $day, date('Y')); // раница между временем Unix
    // и днем, месяцем рождения с нынешним годом
    $currentDate = strtotime($date);
    if ($birthdayTime < $currentDate) {
        $birthdayTime = mktime(0, 0, 0, $month, $day, date('Y') + 1);
    }
    return ($currentDate - $birthdayTime) / TIME * -1; // условие, если д.р. было в этом году

}

echo countdown("1-12-2003");
?>