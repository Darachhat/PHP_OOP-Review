<?php

// final keyword can be used to prevent class inheritance or to prevent method overriding.
final class Fruit {
    public $name;
    public $color;
    public $weight;

    final function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} and weight is {$this->weight} .";
    }
}

class Mango extends Fruit
{
 public function message(){
     echo "This is mango <br>";
 }
}

?>