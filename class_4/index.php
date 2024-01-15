<?php
// OOP Class and Object

class Man
{
    // properties
    public $name;
    public $age;
    public function message($full_name, $myAge)
    {
        $this->name = $full_name;
        $this->age = $myAge;
        // calling a properties with this keyword
        return 'Hello '. $this->name . ' and my age is '. $this->age;
    }

}

$test = new Man();
echo $test->message('Emon', 24);

