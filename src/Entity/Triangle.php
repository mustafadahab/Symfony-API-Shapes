<?php


namespace App\Entity;


class Triangle extends Shap
{
    public $side1,$side2,$side3;

    public function __construct($side1,$side2,$side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;

    }

    public  function circumference()
    {
        return $this->side1+$this->side2+$this->side3;
    }


    public function surfaces()
    {
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s*($s-$this->side1)*($s-$this->side2)*($s-$this->side3));
    }

}