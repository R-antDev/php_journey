<?php

class Brand
{
    public $name;
    public $year;

    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }
}

class Laptop extends Brand
{
    public $model;
    public $price;

    public function __construct($name, $year, $model, $price)
    {
        parent::__construct($name, $year);
        $this->model = $model;
        $this->price = $price;
    }

    public function displayDetails()
    {
        echo "Brand: " . $this->name . "\n";
        echo "Year: " . $this->year . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Price: " . $this->price . "\n";
    }
}


$aLaptop = new Laptop('HP', '2017', 'i3', 22000);
$aLaptop->displayDetails();

