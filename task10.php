<?php

class Calculator
{
    private int $arg1;
    private int $arg2;
    public int $sum=0;

    public function __construct(int $arg1, int $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    public function add()
    {
        $this->sum = $this->arg1 + $this->arg2;
        return $this;
    }

    public function substract() 
    {
        $this->sum = $this->arg1 - $this->arg2;
        return  $this;
    }

    public function multiply()
    {
        $this->sum = $this->arg1 * $this->arg2;
        return  $this;
    }

    public function divide()
    {
        $this->sum = $this->arg1 / $this->arg2;
        return  $this;
    }

    public function addBy(int $number):int
    {
        $this->sum += $number;
        return $this->sum;
    
    }

    public function substractBy(int $number):int
    {
        $this->sum -= $number;
        return $this->sum;
    
    }

    public function divideBy(int $number):int
    {
        $this->sum /= $number;
        return $this->sum;
    }

    public function multiplyBy(int $number):int
    {
        $this->sum *= $number;
        return $this->sum;
    }
}

$calc = new Calculator(4, 9);
echo $calc->add()->addBy(6);


