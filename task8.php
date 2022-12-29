<?php

class Matrix
{
    private array $arr;
    private int $rows;
    private int $cols;

    public function __construct(array $arr, int $rows, int $cols)
    {
        $this->arr = $arr;
        $this->rows = $rows;
        $this->cols = $cols;
    }

    function multiplicationByNumber($number): void
    {
        for ($i = 0; $i < $this->cols; $i++) {
            for ($j = 0; $j < $this->rows; $j++) {
                $this->arr[$i][$j] *= $number;
            }
        }
    }

    function matrixAddition($matrix) : void
    {
        $sum = array();
        for ($i = 0; $i < $this->cols; $i++) {
            for ($j = 0; $j < $this->rows; $j++) {
                $this->arr[$i][$j]  += $matrix[$i][$j];
            }
        }
    }

    function multiplicationMatrix($matrix, $rows2, $cols2) : void
    {
        $matrix3 = [];
        if ($this->cols == $cols2) {
            for ($i=0;$i< $this->rows;$i++){
                for($j=0;$j<$cols2;$j++){
                    $matrix3[$i][$j]=0;
                    for($k=0;$k<$rows2;$k++){
                        $matrix3[$i][$j] += $this->arr[$i][$k]*$matrix[$k][$j];};
                        
                }
            }
            $this->arr = $matrix3;
        } else echo "Умножение на матрицу не получится"; 
    }

    public function show(): void
    {
        echo $this;
    }

    public function __toString(): string
    {
        $result = '<table border="1">';
        for ($i = 0; $i < $this->cols; $i++) {
            $result .= '<tr>';
            for ($j = 0; $j < $this->rows; $j++) {
                $result .= '<td>' . $this->arr[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        $result .= '</table>';
        return $result;
    }
}

$matrix1 = new Matrix([[1, 2, 3], [4, 5, 6]],3,2);
$matrix1->matrixAddition([[1,2,3],[1,2,3],[1,2,3]]); // сложение матриц
$matrix1->multiplicationMatrix([[2,2,2],[2,2,2],[2,2,2]],3,3); // перемножение матриц
$matrix1->multiplicationByNumber(2); // вызов метода умножения на число
$matrix1->show(); // вызов метода отображения матрицы