<?php

trait Name{
    public function welcome(){
        echo "Hello";
    }
}

trait Age{
    public function greet(){
        echo "Hi";
    }
}

class Welcome
{
    use Name, Age;
}

$test = new Welcome();
$test->welcome();
$test->greet();
?>