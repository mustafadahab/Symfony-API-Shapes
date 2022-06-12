<?php


namespace App\Entity;


class Circle extends Shap
{
    public $PI = 3.14;
    public $radius;


    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function circumference()
    {
        $surface = 2 * $this->PI * $this->radius;

        return $surface;
    }


    public function surfaces()
    {
        return $this->PI * pow($this->radius, 2);
    }
}