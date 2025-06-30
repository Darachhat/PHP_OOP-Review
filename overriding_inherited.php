<?php

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} .";
    }
}

class Mango extends Fruit{
    public $weight;

    public function __construct($name, $color, $weight){
        parent::__construct($name, $color);
        $this->weight = $weight;
    }

    public function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} and weight is {$this->weight} .";
    }
}
$mango = new Mango("Mango", "Yellow", "300");
$mango->intro();
?>