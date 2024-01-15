<?php

class Car
{
    public $model;
    public $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function __destruct()
    {
        echo 'My car is '.$this->model.' and color is '.$this->color;
    }
}

$newCar = new Car('Toyota','Red');