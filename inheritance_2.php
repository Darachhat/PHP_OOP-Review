<?php

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} .";
    }
}

class Mango extends Fruit{
    public function message()
    {
        echo "This is mango <br>";
        // Call protected method from within derived class - OK
        $this->intro();
    }

}


$mango = new Mango("Mango", "Yellow");
$mango->message();// OK. message() is public and it calls intro() (which is protected) from within the derived class
?>