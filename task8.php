<?php

class Matrix
{
    private array $arr;
    private int $rows;
    private int $cols;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
        $this->rows = count($this->arr[0]);
        $this->cols = count($this->arr);
    }

    public function multiplicationByNumber(int $number): void
    {
        for ($i = 0; $i < $this->cols; $i++) {
            for ($j = 0; $j < $this->rows; $j++) {
                $this->arr[$i][$j] *= $number;
            }
        }
    }

    public function matrixAddition(array $matrix) : void
    {
        for ($i = 0; $i < $this->cols; $i++) {
            for ($j = 0; $j < $this->rows; $j++) {
                $this->arr[$i][$j]  += $matrix[$i][$j];
            }
        }
    }

    public function multiplicationMatrix(array $matrix2) : void
    {
        $matrix3 = [];
        $rows2 = count($matrix2[0]);
        $cols2 = count($matrix2);
        if ($this->cols === $cols2) {
            for ($i=0;$i< $this->rows;$i++){
                for($j=0;$j<$cols2;$j++){
                    $matrix3[$i][$j]=0;
                    for($k=0;$k<$rows2;$k++){
                        $matrix3[$i][$j] += $this->arr[$i][$k]*$matrix2[$k][$j];};
                        
                }
            }
            $this->arr = $matrix3;
        }
    }

    public function show(): void
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
        
        echo $result;
    }
}

$matrix1 = new Matrix([[1, 2, 3], [4, 5, 6]]);
$matrix1->matrixAddition([[1,2,3],[1,2,3],[1,2,3]]); // сложение матриц
$matrix1->multiplicationMatrix([[2,2,2],[2,2,2],[2,2,2]]); // перемножение матриц
$matrix1->multiplicationByNumber(2); // вызов метода умножения на число
$matrix1->show(); // вызов метода отображения матрицы