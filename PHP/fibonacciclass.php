<?php
class fibonacci
{
    public $a;
    public $b;
    public $n;
    public $sum = 0;
    function __construct($n)
    {
        $this->a = 0;
        $this->b = 1;
        $this->n = $n;
    }
    function fibo($a, $b)
    {
        return $a + $b;
    }
    function series()
    {
        if ($this->n == 1) {
            echo $this->a;
            return;
        }
        if ($this->n == 2) {
            echo $this->a . "<br>";
            echo $this->b . "<br>";
            return;
        }
        echo "0<br>";
        echo "1<br>";
        while ($this->n > 0) {
            $this->sum = $this->fibo($this->a, $this->b);
            $this->a = $this->b;
            $this->b = $this->sum;
            echo $this->sum . "<br>";
            $this->n--;
        }
    }
}
$obj = new fibonacci(120);
$obj->series();
