<?php

class Calculator
{
    private int $arg1;
    private int $arg2;
    public int $sum;

    public function __construct(int $arg1, int $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    public function add($sum = 0)
    {
        $this->sum = $this->arg1 + $this->arg2;
        return $this;
    }

    public function substract()
    {
        $this->sum = $this->arg1 - $this->arg2;
        return $this;
    }

    public function multiply()
    {
        $this->sum = $this->arg1 * $this->arg2;
        return $this;
    }

    public function divide()
    {
        $this->sum = $this->arg1 / $this->arg2;
        return $this;
    }

    public function addBy(int $number)
    {
        $this->sum += $number;
        return $this;
    }

    public function substractBy(int $number)
    {
        $this->sum -= $number;
        return $this;
    }

    public function divideBy(int $number)
    {
        if ($number != 0) {
            $this->sum /= $number;
            return $this;
        }
        return $this;
    }

    public function multiplyBy(int $number)
    {
        $this->sum *= $number;
        return $this;
    }
}

$calc = new Calculator(5, 9);
echo $calc->add()->divideBy(2)->multiplyBy(3)->sum;
