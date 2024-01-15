<?php

trait TraitName1
{
    public function message()
    {
        return 'Hello World 1';
    }

}
trait TraitName2
{
    public function noMessage()
    {
        return 'Hello World 2';
    }

}

class Info
{
    use TraitName1;
    use TraitName2;
}

$test = new Info();
echo $test->noMessage();