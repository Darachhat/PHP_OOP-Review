<?php

abstract class Fruit {
    abstract public function intro();
    abstract public function setInfo($name, $class);
    abstract public function getInfos() : string;
}
?>

<?php

abstract class Car{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Audi extends Car{
    public function intro(): string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>









