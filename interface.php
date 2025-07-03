<?php

interface InterfaceName
{
    public function method();
    public function method2($name, $color);
    public function method3(): string;
}
?>

<?php

interface Animal
{
    public function makesound();
}

class Dog implements Animal
{
    public function makesound()
    {
        echo "Woof!";
    }
}

class Cat implements Animal
{
    public function makesound()
    {
        echo "Meow!";
    }
}

class Bird implements Animal
{
    public function makesound()
    {
        echo "Chirp!";
    }
}

$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

$animals = array($dog, $cat, $bird);

foreach ($animals as $animal) {
    $animal->makesound();
}
?>



