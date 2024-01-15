<?php


// OOP Class and Object

class Person
{
    // properties
    public $name;

    public function __construct($myName)
    {
        $this->name = $myName;
    }

    public function __destruct()
    {
        // calling a properties with this keyword
        echo 'Hello '.$this->name;
    }

}

$test = new Person('Emon');


