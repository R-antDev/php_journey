<?php

abstract class Man
{
    abstract public function message();
}

class myInfo extends Man
{
    public function message()
    {
        return 'Hello My Darling!';
    }
}

class testInfo extends Man
{
    public function message()
    {
        return 'Hello Me!';
    }
}


$absClass = new myInfo();
echo $absClass->message();
$testClass = new myInfo();
echo $testClass->message();

