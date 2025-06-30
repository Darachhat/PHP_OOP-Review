<?php

class Fruit {
    protected $name; //
    public $color; // Work
    public $weight; // Work
    public $price;

    public function __construct($name, $color, $weight, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        $this->price = $price;
    }

    protected function getInfo(){
        echo "Name: $this->name<br>";
        echo "Color: $this->color<br>";
        echo "Weight: $this->weight<br>";
        echo "Price: $this->price<br>";
    }
}

class Mango extends Fruit{
    public $type;

    public function setType($type){
    $this->type = $type;
    }
    public function getType(){
       echo $this->type;
    }
}


$mango = new Mango("Mango", "Yellow", "300", "10000"); // OK. __construct() is public
$mango->setType("Mango-Yellow");
$mango->getInfo(); // ERROR. getInfo() is protected
$mango->getType();  // OK. getType() is public

?>