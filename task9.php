<?php

class Student
{
    public string $about;
    public float $averageMark;

    public function __construct(string $about, float $averageMark)
    {
        $this->about = $about;
        $this->averageMark = $averageMark;
    }

    public function getScholarship(): void
    {
        $amount = '';
        if ($this->averageMark == 5) {
            $amount = '100 USD';
        } else {
            $amount = '80 USD';
        }
        echo $amount;
    }
}

class Aspirant extends Student
{
    public function getScholarship(): void
    {
        if ($this->averageMark == 5) {
            $amount = '200 USD';
        } else {
            $amount = '180 USD';
        }
        echo $amount;
    }
}

$student1 = new Student('Max, Lupa, 2154', 4.5);
$student2 = new Student('Anton, Pupa, 296854', 5);
$aspirant1 = new Aspirant('Max, Lupa, 2154', 4.5);
$aspirant2 = new Aspirant('Anton, Pupa, 296854', 5);
$students = [
    $student1,
    $student2
];
$aspirants = [
    $aspirant1,
    $aspirant2
];

foreach ($students as $student) {
    $student->getScholarship();
}

foreach ($aspirants as $aspirant) {
    $aspirant->getScholarship();
}
