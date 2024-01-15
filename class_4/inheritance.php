<?php

class Man
{
    public $weight;
    public function __construct($weight)
    {
        $this->weight = $weight;
    }
    public function __destruct()
    {
        echo 'My weight '.$this->weight;
    }
    public function message()
    {
        return 'I am Emon ';
    }

}

class Child extends Man
{
    public function test()
    {
        return $this->message();
    }
}

$aChild = new Child('83');
echo $aChild->test('Emon');