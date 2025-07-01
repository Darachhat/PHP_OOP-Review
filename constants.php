<?php

class Fruit
{
 const MESSAGE = "Fruit is good";
}
echo Fruit::MESSAGE;

class Welcome{
    const MESSAGE = "Welcome to PHP";

    public function message(){
        echo self::MESSAGE;
    }
}

$welcome = new Welcome();
$welcome->message();

?>