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

    public function getScholarship(): string
    {
        return $this->averageMark == 5
            ? '100 USD'
            : '80 USD';
    }
}

class Aspirant extends Student
{
    public function getScholarship(): string
    {
        return $this->averageMark == 5
            ? '200 USD'
            : '180 USD';
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
   echo $student->getScholarship();
}

foreach ($aspirants as $aspirant) {
    echo $aspirant->getScholarship();
}
